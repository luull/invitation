<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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
Route::get('/', 'frontpage\indexController@index');
Route::get('/dashboard', 'manager\indexController@index');

Route::get('/login', 'frontpage\AuthController@index')->name('login');
Route::post('/auth/login', 'frontpage\AuthController@login')->name('redirectAuthLogin');
Route::get('/logout', 'frontpage\AuthController@logout');

Route::get('/regis', 'frontpage\AuthController@regis');
Route::post('/auth/register', 'frontpage\AuthController@register')->name('redirectAuthRegister');


Route::get('/auth/google/redirect', 'frontpage\AuthController@redirectToProvider');
Route::get('/auth/google/callback', 'frontpage\AuthController@handleProviderCallback');

Route::get('/auth/facebook/redirect', 'frontpage\AuthController@redirectToProvider2');
Route::get('/auth/facebook/callback', 'frontpage\AuthController@handleProviderCallback2');

Route::get('/pricelist', 'frontpage\indexController@pricelist');

Route::get('/init/invitation', 'manager\indexController@initInvitation');
Route::post('/create/invitation', 'manager\indexController@createInvitation')->name('create-invitation');

Route::get('{id}/themes/{theme}', 'templates\indexController@index');