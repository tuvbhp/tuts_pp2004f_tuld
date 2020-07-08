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
Route::get('users/login', 'Auth\LoginController@showLoginForm');
Route::post('users/login', 'Auth\LoginController@login');
Route::group(
    array('prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'),
    function () {
    Route::get('users', 'UsersController@index');
}
);
Route::get('users', 'UsersController@index');