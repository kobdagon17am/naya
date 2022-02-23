<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\banner;
use App\product_type;
use App\product;
use App\product_details;
use App\product_key_ingredient;
use App\product_how_to_eat;
use App\product_warning;
use App\news;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = banner::select('*')->orderBy('banners_slide_no', 'ASC')->get();
        $product_type = product_type::all();
        $product_1 = DB::table('products')
            ->join('product_types', 'product_types.id', 'products.product_type_id')
            ->join('product_details', 'product_details.id', 'products.id')
            ->join('product_key_ingredients', 'product_key_ingredients.id', 'products.id')
            ->join('product_how_to_eats', 'product_how_to_eats.id', 'products.id')
            ->join('product_warnings', 'product_warnings.id', 'products.id')
            ->select(
                'product_types.product_type_name',
                'products.*',
                'product_details.detail',
                'product_key_ingredients.detail_product_key',
                'product_how_to_eats.detail_product_how',
                'product_warnings.detail_product_warnings'
            )
            ->where('product_types.id', '1')->limit(4)->get();

        $product_2 = DB::table('products')
            ->join('product_types', 'product_types.id', 'products.product_type_id')
            ->join('product_details', 'product_details.id', 'products.id')
            ->join('product_key_ingredients', 'product_key_ingredients.id', 'products.id')
            ->join('product_how_to_eats', 'product_how_to_eats.id', 'products.id')
            ->join('product_warnings', 'product_warnings.id', 'products.id')
            ->select(
                'product_types.product_type_name',
                'products.*',
                'product_details.detail',
                'product_key_ingredients.detail_product_key',
                'product_how_to_eats.detail_product_how',
                'product_warnings.detail_product_warnings'
            )
            ->where('product_types.id', '2')->limit(4)->get();

        $product_3 = DB::table('products')
            ->join('product_types', 'product_types.id', 'products.product_type_id')
            ->join('product_details', 'product_details.id', 'products.id')
            ->join('product_key_ingredients', 'product_key_ingredients.id', 'products.id')
            ->join('product_how_to_eats', 'product_how_to_eats.id', 'products.id')
            ->join('product_warnings', 'product_warnings.id', 'products.id')
            ->select(
                'product_types.product_type_name',
                'products.*',
                'product_details.detail',
                'product_key_ingredients.detail_product_key',
                'product_how_to_eats.detail_product_how',
                'product_warnings.detail_product_warnings'
            )
            ->where('product_types.id', '3')->limit(4)->get();

        $news_1 = DB::table('news')
            ->join('new_types', 'new_types.id', 'news.new_type_id')
            ->select(
                'new_types.new_type_name',
                'news.*'
            )
            ->where('new_types.id', '1')
            ->orderBy('news.new_date', 'desc')
            ->limit(1)->get();

        $news_2 = DB::table('news')
            ->join('new_types', 'new_types.id', 'news.new_type_id')
            ->select(
                'new_types.new_type_name',
                'news.*'
            )
            ->where('new_types.id', '2')
            ->orderBy('news.new_date', 'desc')
            ->limit(1)->get();

        $news_3 = DB::table('news')
            ->join('new_types', 'new_types.id', 'news.new_type_id')
            ->select(
                'new_types.new_type_name',
                'news.*'
            )
            ->where('new_types.id', '3')
            ->orderBy('news.new_date', 'desc')
            ->limit(1)->get();

        $data = array(
            'banner' => $banner,
            'product_type' => $product_type,
            'product_1' => $product_1,
            'product_2' => $product_2,
            'product_3' => $product_3,
            'news_1' => $news_1,
            'news_2' => $news_2,
            'news_3' => $news_3
        );
        return view('frontend.index', $data);
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
