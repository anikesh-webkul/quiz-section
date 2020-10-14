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
    return view('welcome');
});

//insert userdata
Route::view('insert','homeView');
Route::post('submit','UserDataController@userdataentry');



//fetch data for create form 
    Route::get('createFormView','UserDataController@createForm');
   //Route::post('submit','UserDataController@userdataentry');

?>