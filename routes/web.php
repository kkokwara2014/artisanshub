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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'FrontController@index')->name('index');
Route::get('/about', 'FrontController@about')->name('about');
Route::get('/product/{id}/show', 'FrontController@productSingle')->name('frontend.product.show');
Route::get('/category/{id}/show', 'FrontController@showprodbycategory')->name('frontend.category.show');

Route::post('/search/product', 'SearchController@searchproduct')->name('search.product');


Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    Route::get('/', 'AdminController@index')->name('dashboard.index');

    Route::resource('comment', 'CommentController');
    Route::resource('category', 'CategoryController');
    Route::resource('skill', 'SkillController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
