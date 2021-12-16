<?php

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

Route::get('/', function () {
    return view('documentation');
});

Route::get('/redocs', function () {
    return view('redocs');
});

Route::get('/docs', function(){
    
    return response()->file(resource_path('/mainGV.json'));

});

Route::get('/adminDocs', function(){
    
    return response()->file(resource_path('/adminGV.json'));

});