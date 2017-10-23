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
    return view('pages.index');
});

Route::post('mainAdmin', function () {
    return view('mainAdmin');
})->name('mainAdmin');

Route::get('mainAdmin', function () {
    return view('mainAdmin');
})->name('mainAdmin');

Route::get('Redacteur/index', function () {
    return view('Redacteur/index');
})->name('Redacteur/index');

Route::get('auth/login', ['as' => 'login', 'uses' => 'Auth\LoginController@getLogin']);

Route::resource('article', 'ArticleController');
Route::resource('category', 'CategoryController');
Route::resource('subCategory', 'SubCategoryController');
Route::resource('tag', 'TagController');
Route::resource('comment', 'CommentController');