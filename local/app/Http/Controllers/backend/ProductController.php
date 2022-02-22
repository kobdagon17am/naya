<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\product;
use App\product_type;
use App\product_details;
use App\product_key_ingredient;
use App\product_how_to_eat;
use App\product_warning;
use Illuminate\Support\Facades\DB;
use App\External\Tool;

class ProductController extends Controller
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
        $product = product::all();
        $product_type = product_type::all();
        $data = array(
            'product' => $product,
            'product_type' => $product_type
        );
        return view('backend.products', $data);
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
        $Pro = new product;
        $Pro->product_name_th = $request->product_name_th;
        $Pro->product_name_en = $request->product_name_en;
        $Pro->product_detail = $request->product_detail;

        $path = public_path().'/upload/product/';
        if (!empty($request->file('product'))) {
                if (isset($Pro->product_pics)) {
                    unlink($path.$Pro->product_pics);
                }
                $imgwidth = 418;
                $filename = 'product' ;
                $request_file = $request->file('product');
                $name_pic = Tool::upload_picture($path,$imgwidth,$filename,$request_file);
                $Pro->product_pics = $name_pic;
        }

        $Pro->capsule = $request->capsule;
        $Pro->retail_price = $request->retail_price;
        $Pro->member_price = $request->member_price;
        $Pro->pv = $request->pv;
        $Pro->FDA_No = $request->FDA_No;
        $Pro->product_type_id = $request->product_type_id;
        $Pro->save();

        $Dt = new product_details;
        $Dt->detail = $request->detail;
        $Dt->save();

        $Pk = new product_key_ingredient;
        $Pk->detail_product_key = $request->detail_product_key;
        $Pk->save();

        $Ph = new product_how_to_eat;
        $Ph->detail_product_how = $request->detail_product_how;
        $Ph->save();

        $Pw = new product_warning;
        $Pw->detail_product_warnings = $request->detail_product_warnings;
        $Pw->save();

        return redirect('product');
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
        
        return view('backend.products_edit', $data);
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
        $Pro = product::find($request->id);
        $Pro->product_name_th = $request->product_name_th;
        $Pro->product_name_en = $request->product_name_en;
        $Pro->product_detail = $request->product_detail;

        $path = public_path().'/upload/product/';
        if (!empty($request->file('product'))) {
                if (isset($Pro->product_pics)) {
                    unlink($path.$Pro->product_pics);
                }
                $imgwidth = 418;
                $filename = 'product' ;
                $request_file = $request->file('product');
                $name_pic = Tool::upload_picture($path,$imgwidth,$filename,$request_file);
                $Pro->product_pics = $name_pic;
        }

        $Pro->capsule = $request->capsule;
        $Pro->retail_price = $request->retail_price;
        $Pro->member_price = $request->member_price;
        $Pro->pv = $request->pv;
        $Pro->FDA_No = $request->FDA_No;
        $Pro->product_type_id = $request->product_type_id;
        $Pro->update();

        $Dt = product_details::find($request->id);
        $Dt->detail = $request->detail;
        $Dt->update();

        $Pk = product_key_ingredient::find($request->id);
        $Pk->detail_product_key = $request->detail_product_key;
        $Pk->update();

        $Ph = product_how_to_eat::find($request->id);
        $Ph->detail_product_how = $request->detail_product_how;
        $Ph->update();

        $Pw = product_warning::find($request->id);
        $Pw->detail_product_warnings = $request->detail_product_warnings;
        $Pw->update();
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
        $product = product::find($id);
        $product->delete();
        $product_details = product_details::find($id);
        $product_details->delete();
        $product_key_ingredient = product_key_ingredient::find($id);
        $product_key_ingredient->delete();
        $product_how_to_eat = product_how_to_eat::find($id);
        $product_how_to_eat->delete();
        $product_warning = product_warning::find($id);
        $product_warning->delete();
        $path = public_path().'/upload/product/';
        unlink($path.$product->product_pics);
        return back();
    }

    public function remove_picture(Request $request)
    {
        $type = $request->input_name;
        $file_name = $request->input_file_name;
        $id = $request->id;
        // dd($type);
        switch ($type) {
            case 'product':
                $path = public_path() . '/upload/product/';
                unlink($path . $file_name);
                $result = product::find($id);
                $result->product_pics = null;
                $result->save();
                return response()->json(['status' => 200]);
                break;
        };
    }
}
