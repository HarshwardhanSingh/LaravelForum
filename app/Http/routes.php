<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/',['as'=>'root','uses'=>'PagesController@welcome']);

    Route::get('/login',['middleware'=>'guest','as'=>'login','uses'=>'AuthController@login']);
    Route::post('/handleLogin',['as'=>'handleLogin','uses'=>'AuthController@handleLogin']);

    Route::get('/signup',['middleware'=>'guest','as'=>'Signup','uses'=>'UsersController@create']);
    Route::post('/handleSignup',['as'=>'HandleSignup','uses'=>'UsersController@store']);
});
