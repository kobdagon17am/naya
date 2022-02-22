<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\product_type;
use App\product;
use App\product_details;
use App\product_key_ingredient;
use App\product_how_to_eat;
use App\product_warning;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
            ->where('product_types.id', '1')->paginate(8);

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
            ->where('product_types.id', '2')->paginate(8);

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
            ->where('product_types.id', '3')->paginate(8);

        $data = array(
            'product_type' => $product_type,
            'product_1' => $product_1,
            'product_2' => $product_2,
            'product_3' => $product_3
        );
        return view('frontend.products', $data);
    }

    public function detail($id)
    {
        $product_type = product_type::all();
        $product = DB::table('products')
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
            ->where('products.id', $id)->get();
            
        $data = array(
            'product' => $product,
            'product_type' => $product_type,
            'id' => $id
        );

        return view('frontend.product-detail', $data);
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
