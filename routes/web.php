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

Auth::routes();


Route::group(['middleware' => ['auth']], function(){
    Route::get('/', 'ClotheController@index');
    Route::get('/clothes/create', 'ClotheController@create');
    Route::get('/clothes/{clothe}/edit', 'ClotheController@edit');
    Route::put('/clothes/{clothe}', 'ClotheController@update');
    Route::delete('/clothes/{clothe}', 'ClotheController@delete');
    Route::get('/clothes/{clothe}', 'ClotheController@show');
    Route::post('/clothes', 'ClotheController@store');
    Route::get('/categories/{category}', 'CategoryController@index');

});
// Route::get('/', 'WeatherAPIController@weatherData'); // 追加
Route::get('/home', 'HomeController@index')->name('home');
