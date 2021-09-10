<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
//Route::get('/', function (){
//    return \App\Models\Web::all();
//});
Route::get('/',[HomeController::class,'index']);
//Route::get('/',[\App\Http\Controllers\HomeController::class,'index']);
Route::post('index',[\App\Http\Controllers\HomeController::class,'store'])->name('store');
Route::post('/',[\App\Http\Controllers\HomeController::class,'index'])->name('index');
Route::get('/search',[\App\Http\Controllers\HomeController::class,'search']);
Route::get('/',[\App\Http\Controllers\HomeController::class,'getDashboard']);
//Route::post('/post', function (Request $request){
//
//        $post = new Web;
//        $post->product_id = $request->product_id;
//        $post->name = $request->name;
//        $post->price = $request->price;
//        $post->avatar = $request->avatar;
//        $post->save();
//
//
//});
