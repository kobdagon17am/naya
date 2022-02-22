
<?php

use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\NewsController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\frontend\OpportunityController;
use App\Http\Controllers\frontend\OfficeController;
use App\Http\Controllers\frontend\HallofframeController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', 'HomeController@index');
Route::get('', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/news/info', [NewsController::class, 'index']);
Route::get('/news/promotion', [NewsController::class, 'promotion']);
Route::get('/news/ac_picture', [NewsController::class, 'ac_picture']);
Route::get('/news-detail/{id}', [NewsController::class, 'detail']);
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products-detail/{id}', [ProductController::class, 'detail']);
Route::get('/opportunity', [OpportunityController::class, 'index']);
Route::get('/office', [OfficeController::class, 'index']);
Route::get('/hallofframe', [HallofframeController::class, 'index']);
