<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\news;
use App\new_type;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $new_type = new_type::all();
        $news_p = DB::table('news')
            ->join('new_types', 'new_types.id', 'news.new_type_id')
            ->select(
                'new_types.new_type_name',
                'news.*'
            )
            ->where('new_types.id', '1')
            ->orderBy('news.new_date', 'desc')
            ->limit(3)->get();

        $news_1 = DB::table('news')
            ->join('new_types', 'new_types.id', 'news.new_type_id')
            ->select(
                'new_types.new_type_name',
                'news.*'
            )
            ->where('new_types.id', '1')
            ->orderBy('news.new_date', 'desc')
            ->paginate(2);

        $news_2 = DB::table('news')
            ->join('new_types', 'new_types.id', 'news.new_type_id')
            ->select(
                'new_types.new_type_name',
                'news.*'
            )
            ->where('new_types.id', '2')
            ->orderBy('news.new_date', 'desc')
            ->paginate(2);

        $news_3 = DB::table('news')
            ->join('new_types', 'new_types.id', 'news.new_type_id')
            ->select(
                'new_types.new_type_name',
                'news.*'
            )
            ->where('new_types.id', '3')
            ->orderBy('news.new_date', 'desc')
            ->paginate(2);

        $data = array(
            'new_type' => $new_type,
            'news_p' => $news_p,
            'news_1' => $news_1,
            'news_2' => $news_2,
            'news_3' => $news_3
        );

        return view('frontend.news_info', $data);
    }

    public function promotion()
    {
        $new_type = new_type::all();
        $news_p = DB::table('news')
            ->join('new_types', 'new_types.id', 'news.new_type_id')
            ->select(
                'new_types.new_type_name',
                'news.*'
            )
            ->where('new_types.id', '2')
            ->orderBy('news.new_date', 'desc')
            ->limit(3)->get();

        $news_1 = DB::table('news')
            ->join('new_types', 'new_types.id', 'news.new_type_id')
            ->select(
                'new_types.new_type_name',
                'news.*'
            )
            ->where('new_types.id', '1')
            ->orderBy('news.new_date', 'desc')
            ->paginate(2);

        $news_2 = DB::table('news')
            ->join('new_types', 'new_types.id', 'news.new_type_id')
            ->select(
                'new_types.new_type_name',
                'news.*'
            )
            ->where('new_types.id', '2')
            ->orderBy('news.new_date', 'desc')
            ->paginate(2);

        $news_3 = DB::table('news')
            ->join('new_types', 'new_types.id', 'news.new_type_id')
            ->select(
                'new_types.new_type_name',
                'news.*'
            )
            ->where('new_types.id', '3')
            ->orderBy('news.new_date', 'desc')
            ->paginate(2);

        $data = array(
            'new_type' => $new_type,
            'news_p' => $news_p,
            'news_1' => $news_1,
            'news_2' => $news_2,
            'news_3' => $news_3
        );

        return view('frontend.news_promotion', $data);
    }

    public function ac_picture()
    {
        $new_type = new_type::all();
        $news_p = DB::table('news')
            ->join('new_types', 'new_types.id', 'news.new_type_id')
            ->select(
                'new_types.new_type_name',
                'news.*'
            )
            ->where('new_types.id', '3')
            ->orderBy('news.new_date', 'desc')
            ->limit(3)->get();

        $news_1 = DB::table('news')
            ->join('new_types', 'new_types.id', 'news.new_type_id')
            ->select(
                'new_types.new_type_name',
                'news.*'
            )
            ->where('new_types.id', '1')
            ->orderBy('news.new_date', 'desc')
            ->paginate(2);

        $news_2 = DB::table('news')
            ->join('new_types', 'new_types.id', 'news.new_type_id')
            ->select(
                'new_types.new_type_name',
                'news.*'
            )
            ->where('new_types.id', '2')
            ->orderBy('news.new_date', 'desc')
            ->paginate(2);

        $news_3 = DB::table('news')
            ->join('new_types', 'new_types.id', 'news.new_type_id')
            ->select(
                'new_types.new_type_name',
                'news.*'
            )
            ->where('new_types.id', '3')
            ->orderBy('news.new_date', 'desc')
            ->paginate(2);

        $data = array(
            'new_type' => $new_type,
            'news_p' => $news_p,
            'news_1' => $news_1,
            'news_2' => $news_2,
            'news_3' => $news_3
        );

        return view('frontend.news_ac_picture', $data);
    }

    public function detail($id)
    {
        $new_type = new_type::all();
        $news = DB::table('news')
            ->join('new_types', 'new_types.id', 'news.new_type_id')
            ->select(
                'new_types.new_type_name',
                'news.*'
            )
            ->where('news.id', $id)->get();

        $news_p = news::where('id','!=',$id)->orderBy('news.new_date', 'desc')->limit(3)->get();

        $news_1 = DB::table('news')
            ->join('new_types', 'new_types.id', 'news.new_type_id')
            ->select(
                'new_types.new_type_name',
                'news.*'
            )
            ->where('new_types.id', '1')
            ->orderBy('news.new_date', 'desc')
            ->paginate(2);

        $news_2 = DB::table('news')
            ->join('new_types', 'new_types.id', 'news.new_type_id')
            ->select(
                'new_types.new_type_name',
                'news.*'
            )
            ->where('new_types.id', '2')
            ->orderBy('news.new_date', 'desc')
            ->paginate(2);

        $news_3 = DB::table('news')
            ->join('new_types', 'new_types.id', 'news.new_type_id')
            ->select(
                'new_types.new_type_name',
                'news.*'
            )
            ->where('new_types.id', '3')
            ->orderBy('news.new_date', 'desc')
            ->paginate(2);


        $data = array(
            'news' => $news,
            'new_type' => $new_type,
            'id' => $id,
            'news_p' => $news_p,
            'news_1' => $news_1,
            'news_2' => $news_2,
            'news_3' => $news_3
        );
        return view('frontend.news-detail', $data);
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
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
        //
    }
}
