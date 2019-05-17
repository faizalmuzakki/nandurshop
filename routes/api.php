<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('auth')->namespace('Auth')->group(function () {
    Route::post('/login', 'AuthApiController@login');
    Route::post('/signup', 'AuthApiController@signup');

    Route::middleware('auth:api')->group(function() {
        Route::get('/logout', 'AuthApiController@logout');
        Route::get('/user', 'AuthApiController@user');
    });
});

Route::namespace('Commodity')->group(function(){
    Route::resource('commodity', 'CommodityApiController')->except(['update', 'destroy']);
    Route::name('commodity.')->group(function(){
        Route::put('commodity', 'CommodityApiController@update')->name('update');
        Route::delete('commodity', 'CommodityApiController@destroy')->name('destroy');
    });
});

Route::resource('variety', 'Variety\VarietyApiController');
