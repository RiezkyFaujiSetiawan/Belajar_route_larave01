<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/pertama', function () {
    return view('welcome');
});

Route::get('/', function(){
    echo "Bagaimana cuaca hari ini ?";
});

Route::view('/panggil_view', 'welcome');

Route::redirect('/alihkan', '/');

Route::get('/parameter/{id}', function($id){
    echo "How are you ?".$id;
});

Route::group(['prefix' => 'admin'], function(){

    Route::get('/parameter_kedua/{id}', function($id){
        echo "Di mana kamu tinggal?".$id;
    });

    Route::get('/dashboard', function(){
        echo "ini adalah dashboard";
    });
});