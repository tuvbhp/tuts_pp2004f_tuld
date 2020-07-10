<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', 'MyController@getHome');
Route::get('contact', 'MyController@contact');
Route::get('/contact', 'TicketsController@create');
Route::post('/contact', 'TicketsController@store');
Route::get('/tickets', 'TicketsController@index');
Route::get('/ticket/{slug?}', 'TicketsController@show');
Route::get('/ticket/{slug?}/edit', 'TicketsController@edit');
Route::post('/ticket/{slug?}/edit', 'TicketsController@update');
Route::post('/comment', 'CommentsController@newComment');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('users/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('users/register', 'Auth\RegisterController@register');
Route::get('users/logout', 'Auth\LoginController@logout');
Route::get('users/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('users/login', 'Auth\LoginController@login');
Route::group(array('prefix' => 'admin', 'namespace' => 'Admin'), function () 
{
    Route::get('users', 'UsersController@index');
});
Route::group(array('prefix' => 'admin', 'namespace' => 'Admin'), function () 
{
    Route::get('users', [ 'as' => 'admin.user.index', 'uses' => 'UsersController@index']);
    Route::get('roles', 'RolesController@index');
    Route::get('roles/create', 'RolesController@create');
    Route::post('roles/create', 'RolesController@store');
    Route::get('users/{id?}/edit', 'UsersController@edit');
    Route::post('users/{id?}/edit', 'UsersController@update');
});
Route::get('categories', 'Admin\CategoriesController@index');
Route::get('categories/create', 'Admin\CategoriesController@create');
Route::post('categories/create', 'Admin\CategoriesController@store');
Route::get('posts/create', 'PostsController@create');
Route::post('posts/create', 'PostsController@store');
Route::get('posts/{id?}/edit', 'PostsController@edit');
Route::post('posts/{id?}/edit','PostsController@update');
Route::get('posts', 'PostsController@index');
Route::get('/blog', 'BlogController@index');
Route::get('/blog/{slug?}', 'BlogController@show');