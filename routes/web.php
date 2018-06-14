<?php

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

use App\Post;
use Illuminate\Http\Request;

Route::get('/rfids', 'RfidsController@index')->name('rfids.index');
Route::get('/rfids/details/{id}', 'RfidsController@details')->name('rfids.details');
Route::get('/rfids/add', 'RfidsController@add')->name('rfids.add');
Route::post('/rfids/insert', 'RfidsController@insert')->name('rfids.insert');
Route::get('/rfids/edit/{id}', 'RfidsController@edit')->name('rfids.edit');
Route::post('/rfids/update/{id}', 'RfidsController@update')->name('rfids.update');
Route::get('/rfids/delete/{id}', 'RfidsController@delete')->name('rfids.delete');


Route::get('/', function () {
    return view('welcome');
});
