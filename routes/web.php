<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    $sidebar =  'dashboard';
    $subsidebar =  'dashboard';

    return view('admin.dashboard.index',compact('sidebar','subsidebar'));
});

Route::group(["prefix"=>"products"], function(){
    Route::get('/', [ProductController::class, 'index']);
    Route::get('/add/{product_id?}', [ProductController::class, 'add']);
    Route::post('/store/{product_id?}', [ProductController::class, 'store']);
    Route::get('/delete/{id}', [ProductController::class, 'delete']);
});