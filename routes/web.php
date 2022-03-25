<?php

use Illuminate\Support\Facades\Route;

Route::get('/Dashbord', 'DashboedController@index')->name('dashbord');
Route::get('/home', function () {
    return view('home');
})->name('home');

Route::post('/logout', 'LogoutController@store')->name('logout');
Route::get('/user/{user:username}/posts', 'UserPostController@index')->name('user.posts');


Route::get('/login', 'Auth\LoginController@index')->name('login');
Route::post('/login', 'Auth\LoginController@store');

Route::get('/register', 'Auth\RegisterController@index')->name('register');
Route::post('/register', 'Auth\RegisterController@store');

Route::get('/posts/{post}/show', 'PostesController@show')->name('posts.show');
Route::get('/posts', 'PostesController@index')->name('posts');
Route::post('/posts', 'PostesController@store');
Route::delete('/posts/{post}', 'PostesController@destroy')->name('posts.destroy');

Route::post('/posts/{post}/like', 'PostLikeController@store')->name('posts.like');
Route::delete('/posts/{post}/like', 'PostLikeController@destroy')->name('posts.like');


Route::get('/', function () {
    return view('layout.app');
});
