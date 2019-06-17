<?php

Auth::routes();

// Front End
Route::get('/', 'FrontEndController@index')->name('index');
Route::get('/post/{slug}', 'FrontEndController@singlePost')->name('post.single');
Route::get('/category/{id}', 'FrontEndController@category')->name('category.single');
Route::get('/tag/{id}', 'FrontEndController@tag')->name('tag.single');

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

    // Users
    Route::get('/users', 'UsersController@index')->name('users');
    Route::get('/user/create', 'UsersController@create')->name('user.create');
    Route::get('/user/{id}/delete', 'UsersController@destroy')->name('user.delete');
    Route::get('/user/profile', 'ProfilesController@index')->name('user.profile');
    Route::post('/user/profile/update', 'ProfilesController@update')->name('user.profile.update');
    Route::get('/user/admin/{id}', 'UsersController@admin')->name('user.admin');
    Route::get('/user/not_admin/{id}', 'UsersController@not_admin')->name('user.not_admin');
    Route::post('/user/store', 'UsersController@store')->name('user.store');

    // Settings
    Route::get('/settings', 'SettingsController@index')->name('settings');
    Route::post('/settings/update', 'SettingsController@update')->name('settings.update');
});
