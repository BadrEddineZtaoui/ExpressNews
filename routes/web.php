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

//Admin routes
Route::get('Admin/index', ['as' => 'adminIndex', 'uses' => 'AdminController@index']);
Route::get('Admin/articles', ['as' => 'adminArticles', 'uses' => 'AdminController@articles']);
Route::get('Admin/refs', ['as' => 'adminRefs', 'uses' => 'AdminController@refs']);
Route::get('Admin/reds', ['as' => 'adminReds', 'uses' => 'AdminController@reds']);
Route::get('Admin/tags', ['as' => 'adminTags', 'uses' => 'AdminController@tags']);
Route::get('Admin/categories', ['as' => 'categories', 'uses' => 'CategoryController@index']);


//Redacteur routes
Route::get('Redacteur/index', function () {
    return view('Redacteur/index');
})->name('Redacteur/index');

Route::get('Redacteur/createArticle', function () {
    return view('Redacteur/createArticle');
})->name('Redacteur/createArticle');


//Redacteur En Chef routes
Route::get('RedacteurEnChef/index', function () {
    return view('RedacteurEnChef/index');
})->name('RedacteurEnChef/index');

//Route::get('auth/login', ['as' => 'login', 'uses' => 'Auth\LoginController@getLogin']);


Route::resource('articles', 'ArticleController');
Route::resource('categories', 'CategoryController');
Route::resource('subCategories', 'SubCategoryController');
Route::resource('tags', 'TagController');
Route::resource('comments', 'CommentController');

Route::get('admins-login', 'Admins\Auth\LoginController@showLoginForm')->name('admin.login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
