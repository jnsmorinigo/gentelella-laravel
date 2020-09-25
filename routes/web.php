<?php

use GuzzleHttp\Middleware;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
// Route::GET('/login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::POST('/login', 'Auth\LoginController@login');
// Route::POST('/logout', 'Auth\LoginController@logout')->name('logout');
// Route::GET('/password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');
// Route::POST('password/confirm', 'Auth\ConfirmPasswordController@confirm')->name('password.confirm');
// Route::POST('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::GET('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// Route::POST('/password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
// Route::GET('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// Route::GET('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::POST('/register', 'Auth\RegisterController@register')->name('register');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('client', 'ClientController@index')->middleware('auth');
