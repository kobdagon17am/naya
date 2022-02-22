
<?php

use App\Http\Controllers\backend\BannerController;
use App\Http\Controllers\backend\Product_typeController;
use App\Http\Controllers\backend\NewController;
use App\Http\Controllers\backend\New_typeController;
use App\Http\Controllers\backend\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('banners', [BannerController::class, 'index']);
    Route::post('banner/store', [BannerController::class, 'store']);
    Route::get('banner/delete/{id}', [BannerController::class, 'destroy']);
    Route::get('banner/edit/{id}', [BannerController::class, 'edit']);
    Route::post('banner/update', [BannerController::class, 'update']);
    Route::post('banner/get/slide', [BannerController::class, 'get_slide_banner']);
    Route::post('banner/slide/update', [BannerController::class, 'slide_update']);
    Route::post('banner/delete_image', [BannerController::class, 'remove_picture']);

    Route::get('product_type', [Product_typeController::class, 'index']);
    Route::post('product_type/store', [Product_typeController::class, 'store']);
    Route::get('product_type/delete/{id}', [Product_typeController::class, 'destroy']);
    Route::post('product_type/update', [Product_typeController::class, 'update']);
    Route::get('product_type/edit/{id}', [Product_typeController::class, 'edit']);

    Route::get('product', [ProductController::class, 'index']);
    Route::post('product/store', [ProductController::class, 'store']);
    Route::get('product/delete/{id}', [ProductController::class, 'destroy']);
    Route::get('product/edit/{id}', [ProductController::class, 'edit']);
    Route::post('product/update', [ProductController::class, 'update']);
    Route::post('product/delete_image', [ProductController::class, 'remove_picture']);

    Route::get('new_type', [New_typeController::class, 'index']);
    Route::post('new_type/store', [New_typeController::class, 'store']);
    Route::get('new_type/delete/{id}', [New_typeController::class, 'destroy']);
    Route::post('new_type/update', [New_typeController::class, 'update']);
    Route::get('new_type/edit/{id}', [New_typeController::class, 'edit']);

    Route::get('new', [NewController::class, 'index']);
    Route::post('new/store', [NewController::class, 'store']);
    Route::get('new/delete/{id}', [NewController::class, 'destroy']);
    Route::get('new/edit/{id}', [NewController::class, 'edit']);
    Route::post('new/update', [NewController::class, 'update']);
    Route::post('new/delete_image', [NewController::class, 'remove_picture']);
});
// Route::get('/home', 'HomeController@index');
