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

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');


// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');


Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Route::get('/logout', 'Auth\LoginController@userLogout')->name('user.logout');
Route::post('/logout', 'Auth\LoginController@userLogout')->name('user.logout');


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


    Route::resource('/admin', 'AdminController');
    Route::get('/admins', 'AdminController@admins')->name('admin.admins');
    Route::post('admins/{id}/activate', 'AdminController@activate')->name('admin.activate');
    Route::post('admins/{id}/deactivate', 'AdminController@deactivate')->name('admin.deactivate');

    Route::get('user/profile', 'UserController@profileimage')->name('user.profile');
    Route::post('user/profile', 'UserController@updateprofileimage')->name('user.profile.update');
});

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
