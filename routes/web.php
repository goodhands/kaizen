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

use App\Http\Controllers\AjaxController;

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

Route::group(['prefix' => 'category/{category}'], function () {
    Route::get('/', 'PhotoController@category');
});

Route::group(['prefix' => '{username}'], function () {
    Route::get('/', 'UserController@profile')->name('user.view');    
    Route::post('/follow', 'UserController@follow')->name('user.follow');    
    Route::get('/following', 'UserController@following')->name('user.following');    
    Route::get('/followers', 'UserController@followers')->name('user.followers');    
    Route::get('/photos', 'UserController@photos')->name('user.photos');    
    // Route::get('/photos?except={photo}', 'UserController@similar')->name('user.similarPhotos');    
});

Route::group(['prefix' => 'ajax'], function(){
    Route::get('category/{category}/photos', 'AjaxController@category');
    Route::get('users/{username}/followers', 'AjaxController@followers');
    Route::get('users/{username}/following', 'AjaxController@following');
    Route::get('users/current', 'AjaxController@currentUser');
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