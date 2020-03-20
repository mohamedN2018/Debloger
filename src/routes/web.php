<?php



Route::get('/', 'PagesController@index' );
Route::get('/about', 'PagesController@about' );
Route::get('/services', 'PagesController@services' );
Route::get('/News', 'PagesController@News' );
Route::get('/menu', 'PagesController@menu' );
Route::get('/carousel','PagesController@carousel')->name('carousel');
Route::get('/messaging','PagesController@messaging')->name('messaging');


Route::get('/login','PagesController@login')->name('login');
Route::get('/register','PagesController@register')->name('register');
Route::get('/verify','PagesController@verify')->name('verify');

//posts routes

Route::get('/posts','PostsController@index')->name('posts.index');

Route::get('/posts/create','PostsController@create')->name('posts.create');
Route::post('/posts','PostsController@store')->name('posts.store');
Route::get('/posts/{id}','PostsController@show')->name('posts.show');

Route::get('/posts/{id}/edit','PostsController@edit')->name('posts.edit');
Route::put('/posts/{id}','PostsController@update')->name('posts.update');

Route::delete('/posts/{id}','PostsController@destroy')->name('posts.destroy');


Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
