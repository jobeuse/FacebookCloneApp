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

Auth::routes();



Route::get('login/facebook', 'Auth\SocialController@redirectToProvider')->name('social.login');
Route::get('login/facebook/callback', 'Auth\SocialController@handleProviderCallback');
Route::get('/home', 'HomeController@index')->name('home');

Route::post('/createpost', 'PostsController@store')->name('post.store');
Route::post('/createfile', 'PostsController@fileupload')->name('fileupload.store');

Route::get('/profile/{user:name}', 'ProfileController@show')->name('profile');
Route::post('/profile/update/{user:name}', 'ProfileController@update')->name('profile.update');
Route::post('/profile/dalete/{user:name}', 'ProfileController@destroy')->name('profile.delete');
Route::POST('/profile/request/{user:id}', 'ProfileController@storefriends')->name('profile.friends');

Route::get('/Friends', 'FriendsController@index')->name('friends');