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

    // Posts
    Route::get('/post/create', 'PostsController@create')->name('post.create');
    Route::get('/posts', 'PostsController@index')->name('posts');
    Route::get('posts/trashed', 'PostsController@trashed')->name('trashed');
    Route::get('posts/{id}/kill', 'PostsController@kill')->name('post.kill');
    Route::get('posts/{id}/restore', 'PostsController@restore')->name('post.restore');
    Route::get('/post/{id}/delete', 'PostsController@destroy')->name('post.delete');
    Route::get('/post/{id}/edit', 'PostsController@edit')->name('post.edit');
    Route::post('/post/store', 'PostsController@store')->name('post.store');
    Route::post('/post/{id}/update', 'PostsController@update')->name('post.update');

    // Categories
    Route::get('/categories', 'CategoriesController@index')->name('categories');
    Route::get('/category/create', 'CategoriesController@create')->name('category.create');
    Route::get('/category/{id}/edit', 'CategoriesController@edit')->name('category.edit');
    Route::get('/category/{id}/delete', 'CategoriesController@destroy')->name('category.delete');
    Route::post('/category/store', 'CategoriesController@store')->name('category.store');
    Route::patch('/category/{id}/update', 'CategoriesController@update')->name('category.update');

    // Tags
    Route::get('/tags', 'TagsController@index')->name('tags');
    Route::get('/tag/{id}/edit', 'TagsController@edit')->name('tag.edit');
    Route::get('/tag/{id}/delete', 'TagsController@destroy')->name('tag.delete');
    Route::get('/tag/create', 'TagsController@create')->name('tag.create');
    Route::post('/tag/store', 'TagsController@store')->name('tag.store');
    Route::post('/tag/{id}/update', 'TagsController@update')->name('tag.update');
});
