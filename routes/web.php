<?php
/*
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


Route::get('/', array('as' => 'auth.index', 'uses' => 'AuthController@index'));



Route::group(['middleware'=>['web']],function(){
    Route::group(['prefix' => 'auth'], function (){

        Route::get('login',array('as' => 'auth.login', 'uses' => 'AuthController@login'));
        Route::post('login',array('as' => 'login.attempt', 'uses' => 'AuthController@attempt'));


        Route::get('register',array('as' => 'auth.register', 'uses' => 'AuthController@register'));
        Route::post('register',array('as' => 'register.create', 'uses' => 'AuthController@create'));


        Route::post('logout',array('as'=>'auth.logout', 'uses'=>'AuthController@logout'));



    });

    Route::group(['prefix' => 'dashboard','middleware'=>'auth'],function (){
        Route::get('/',array('as' => 'dashboard', 'uses' => 'DashboardController@index'));


    });

    Route::get('password/reset','Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email','Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}','Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset','Auth\ResetPasswordController@reset');

});



