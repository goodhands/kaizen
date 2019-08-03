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

/**
 * Every route is first a folder because they can have sub pages
 */

Route::get('/', function () {
    return view('index');
});

Route::get('/explore', function () {
    return view('index');
});

Route::get('/photo/{id}', function () {
    return view('photo/index');
});

Route::get('/upload', function () {
    return view('photo/new');
});

Route::get('/team', function () {
    return view('team/index');
});

Route::get('/discover', function () {
    return view('discover/index');
});

Route::get('/auth/login', function () {
    return view('auth/login');
});

Route::get('/auth/signup', function () {
    return view('auth/signup');
});


Route::group(['prefix' => '{username}'], function () {
    Route::get('/', 'UserController@profile')->name('user.view');    
    Route::get('/following', 'UserController@following')->name('user.following');    
    Route::get('/followers', 'UserController@followers')->name('user.followers');    
    Route::get('/photos', 'UserController@photos')->name('user.photos');    
});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/menu', 'UserController@menu');
