<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\banner;
use App\External\Tool;

class BannerController extends Controller
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
        $banner = banner::all();
        $data = array(
            'banner' => $banner
        );
        return view('backend.banner',$data);
        //
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
        
        $bn = new banner;
		$bn->banners_link = $request->banners_link;

        $path = public_path().'/upload/banner/';
        if (!empty($request->file('banner'))) {
            if (isset($bn->banners_pic)) {
                unlink($path.$bn->banners_pic);
            }
            $imgwidth = 1600;
            //$imgwidth = 1140;
            $filename = 'file_first' ;
            $request_file = $request->file('banner');
            $name_pic = Tool::upload_picture($path,$imgwidth,$filename,$request_file);
            $bn->banners_pic = $name_pic;
        }

        $bn->save();
        return redirect('banners');
        //
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
        $banner = banner::find($id);
        $data = array(
            'banner' => $banner
        );
        return view('backend.banner_edit',$data);
        // $banner = banner::find($id);
        // return $banner;
        //
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
        $bn = banner::find($request->id);
		$bn->banners_link = $request->banners_link;

        $path = public_path().'/upload/banner/';
        if (!empty($request->file('banner'))) {
            if (isset($bn->banners_pic)) {
                unlink($path.$bn->banners_pic);
            }
            $imgwidth = 1600;
            $filename = 'file_first' ;
            $request_file = $request->file('banner');
            $name_pic = Tool::upload_picture($path,$imgwidth,$filename,$request_file);
            $bn->banners_pic = $name_pic;
        }
       
        $bn->update();
        return back();
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = banner::find($id);
        $banner->delete();
        $path = public_path().'/upload/banner/';
        unlink($path.$banner->banners_pic);
        return back();
        //
    }

    public function get_slide_banner(Request $request)
    {
        $banner = banner::where('id', '=', $request->id)->first();
        $count = banner::count();
        $data = array(
            'banner'    =>$banner,
            'count'     =>$count
        );
        echo json_encode($data);
    }

    public function slide_update(Request $request)
    {
        $bn = banner::find($request->show_id);
        $bn->banners_slide_no = $request->slide_no;
        $bn->update(); 
        return back();
    }

    public function remove_picture(Request $request)
    {
        $type = $request->input_name;
        $file_name = $request->input_file_name;
        $id = $request->id;
        // dd($type);
        switch ($type) {
            case 'banner':
                $path = public_path() . '/upload/banner/';
                unlink($path . $file_name);
                $result = banner::find($id);
                $result->banners_pic = null;
                $result->save();
                return response()->json(['status' => 200]);
                break;
        };
    }
}