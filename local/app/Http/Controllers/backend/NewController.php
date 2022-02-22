<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\news;
use App\new_type;
use Illuminate\Support\Facades\DB;
use App\External\Tool;

class NewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $news = news::all();
        $new_type = new_type::all();
        $data = array(
            'news' => $news,
            'new_type' => $new_type
        );
        return view('backend.new', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ne = new news;
        $ne->title = $request->title;
        $ne->new_detail_title = $request->new_detail_title;

        $path = public_path().'/upload/news/';
        if (!empty($request->file('news'))) {
                if (isset($ne->new_pics)) {
                    // unlink($path.$ne->new_pics);
                }
                $imgwidth = 418;
                $filename = 'news' ;
                $request_file = $request->file('news');
                $name_pic = Tool::upload_picture($path,$imgwidth,$filename,$request_file);
                $ne->new_pics = $name_pic;
        }

        $ne->new_date = date('Y-m-d', strtotime($request->input('new_date')));
        $ne->new_detail = $request->new_detail;
        $ne->new_type_id = $request->new_type_id;
        $ne->save();

        return redirect('new');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $new_type = new_type::all();
        $news = DB::table('news')
            ->join('new_types', 'new_types.id', 'news.new_type_id')
            ->select(
                'new_types.new_type_name',
                'news.*',
            )
            ->where('news.id', $id)->get();
        $data = array(
            'news' => $news,
            'new_type' => $new_type,
            'id' => $id
        );
        
        return view('backend.new_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $ne = news::find($request->id);
        $ne->title = $request->title;
        $ne->new_detail_title = $request->new_detail_title;

        $path = public_path().'/upload/news/';
        if (!empty($request->file('news'))) {
                if (isset($ne->new_pics)) {
                    // unlink($path.$ne->new_pics);
                }
                $imgwidth = 418;
                $filename = 'news' ;
                $request_file = $request->file('news');
                $name_pic = Tool::upload_picture($path,$imgwidth,$filename,$request_file);
                $ne->new_pics = $name_pic;
        }

        $ne->new_date = date('Y-m-d', strtotime($request->input('new_date')));
        $ne->new_detail = $request->new_detail;
        $ne->new_type_id = $request->new_type_id;
        $ne->update();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ne = news::find($id);
        $ne->delete();

        $ne->delete();
        $path = public_path().'/upload/news/';
        unlink($path.$ne->new_pics);
        return back();
    }

    public function remove_picture(Request $request)
    {
        $type = $request->input_name;
        $file_name = $request->input_file_name;
        $id = $request->id;
        // dd($type);
        switch ($type) {
            case 'news':
                $path = public_path() . '/upload/news/';
                unlink($path . $file_name);
                $result = news::find($id);
                $result->new_pics = null;
                $result->save();
                return response()->json(['status' => 200]);
                break;
        };
    }
}
