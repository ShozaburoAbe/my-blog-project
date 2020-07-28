<?php

use Illuminate\Support\Facades\Route;

Route::get('/post/{id}', 'PostController@show')->name('post.show');

Route::middleware('auth')->group(function () {

    Route::get('/create_post', 'PostController@create')->name('post.create');
    Route::post('/store_post', 'PostController@store')->name('post.store');
    Route::get('/edit/{id}', 'PostController@edit')->name('post.edit');
    Route::post('/update/{id}', 'PostController@update')->name('post.update');
    Route::get('/destroy/{id}', 'PostController@destroy')->name('post.destroy');
});
