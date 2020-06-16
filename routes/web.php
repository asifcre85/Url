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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth','admin']],function(){
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/roleRegister','Admin\DashboardController@registered');
    Route::get('/edit/{id}','Admin\DashboardController@edit');
    Route::put('/update/{id}','Admin\DashboardController@update');
    Route::delete('/delete/{id}','Admin\DashboardController@delete');
    Route::get('/abouts','Admin\AboutsController@index');
    Route::post('/save','Admin\AboutsController@save');
    Route::get('/abouts/{id}','Admin\AboutsController@edit');
    Route::put('/update2/{id}','Admin\AboutsController@update2');
    Route::delete('/delete2/{id}','Admin\AboutsController@delete2');

    Route::get('generate-shorten-link', 'ShortLinkController@index');
Route::post('generate-shorten-link', 'ShortLinkController@store')->name('generate.shorten.link.post');
   
Route::get('{code}', 'ShortLinkController@shortenLink')->name('shorten.link');

});
