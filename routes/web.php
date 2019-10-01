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
 * Every route is first a folder (view) because they can have sub pages
 */

Route::get('/', function () {
    return view('index');
});

Route::get('/explore', function () {
    return view('index');
});

Route::group(['prefix' => 'api'], function () {
    Route::get('/photo/', 'PhotoController@resolveApi');
    Route::get('/similar', 'PhotoController@similar');    
});


Route::group(['prefix' => 'photo'], function () {
    /**
     * Maybe there is a way i can add a middleware that will
     * make sure that if a {?json} is added to the url, we'll return json by default
     */
    Route::get('/{photo}', 'PhotoController@show');
    Route::get('/{photo}/comments', 'PhotoController@comments');
    Route::post('/{photo}/comments', 'CommentController@store');
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
    // Route::get('/photos?except={photo}', 'UserController@similar')->name('user.similarPhotos');    
});


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/menu', 'UserController@menu');
