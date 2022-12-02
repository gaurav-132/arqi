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


Route::group(["prefix"=>"product"],function(){
    Route::get('add-product', [ProductController::class, 'add']);
});