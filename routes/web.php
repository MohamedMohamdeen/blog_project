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
/* routes front web  */
Route::get('/','FrontEndUIController@index')->name('index');
Route::get('/{slug}','FrontEndUIController@single_post')->name('single_post');

/* routes Auth  */
Auth::routes();

/* routes post  */
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/posts', 'PostsController@index')->name('posts');
Route::get('/posts-trash', 'PostsController@trash')->name('posts.trash');
Route::get('/Add-Post', 'PostsController@create')->name('posts.create');
Route::get('/posts/edit/{id}', 'PostsController@edit')->name('posts.edit');
Route::get('/posts/sdelete/{id}', 'PostsController@sdelet')->name('posts.sdelete');
Route::get('/posts/hdelete/{id}', 'PostsController@destroy')->name('posts.hdelete');
Route::get('/posts/restore/{id}', 'PostsController@restore')->name('posts.restore');
Route::post('/Post/save', 'PostsController@store')->name('posts.store');
Route::post('/posts/update/{id}', 'PostsController@update')->name('posts.update');
/* routes category  */
Route::get('/Add-Category', 'CategoriesController@create')->name('categories.create');
Route::post('/Category/save', 'CategoriesController@store')->name('categories.store');
Route::post('/Category/update/{id}', 'CategoriesController@update')->name('categories.update');
Route::get('/Category/edit/{id}', 'CategoriesController@edit')->name('categories.edit');
Route::get('/Category/delete/{id}', 'CategoriesController@destroy')->name('categories.delete');
Route::get('/categories', 'CategoriesController@index')->name('categories.index');

/* routes tag  */
Route::get('/Add-tag', 'TagController@create')->name('tags.create');
Route::post('/tag/save', 'TagController@store')->name('tags.store');
Route::post('/tag/update/{id}', 'TagController@update')->name('tags.update');
Route::get('/tag/edit/{id}', 'TagController@edit')->name('tags.edit');
Route::get('/tag/delete/{id}', 'TagController@destroy')->name('tags.delete');
Route::get('/tags', 'TagController@index')->name('tags.index');

/* routes users  */
Route::get('/Add-user', 'UsersController@create')->name('users.create');
Route::post('/user/save', 'UsersController@store')->name('users.store');
Route::post('/user/update/{id}', 'UsersController@update')->name('users.update');
Route::get('/user/edit/{id}', 'UsersController@edit')->name('users.edit');
Route::get('/user/admin/{id}', 'UsersController@admin')->name('users.admin');
Route::get('/user/delete/{id}', 'UsersController@destroy')->name('users.delete');
Route::get('/users', 'UsersController@index')->name('users.index');

/* routes settings  */
Route::get('/settings', 'SettingsController@index')->name('settings.index');
Route::post('/settings/update', 'SettingsController@update')->name('settings.update');
Route::get('/mohamed',function(){
	return App\Category::find('2')->sub_category;
});

