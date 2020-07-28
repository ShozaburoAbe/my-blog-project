<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {

    Route::get('/admin', 'AdminController@index')->name('admin');
    Route::get('/logout', 'AdminController@logout')->name('logouts');


    Route::get('/users', 'UserController@index')->name('show.users');
    Route::get('/{id}/posts', 'UserController@show')->name('show.posts');
    Route::get('/{id}/delete', 'UserController@delete')->name('delete.user');
    Route::get('/users/{id}', 'UserController@profile')->name('show.user');


    Route::put('users/{id}/update', 'UserController@update')->name('update.user.profile');
});
