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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');

    Route::get('/post/create', 'PostsController@create')->name('post.create');
    Route::post('/post/store', 'PostsController@store')->name('post.store');

    
    Route::get('/categories', 'CategoriesController@index')->name('categories');
    Route::get('/category/create', 'CategoriesController@create')->name('category.create');
    Route::get('/category/{id}/edit', 'CategoriesController@edit')->name('category.edit');
    Route::get('/category/{id}/delete', 'CategoriesController@destroy')->name('category.delete');
    Route::post('/category/store', 'CategoriesController@store')->name('category.store');
    Route::patch('/category/{id}/update', 'CategoriesController@update')->name('category.update');
});
