<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\frontpage\IndexFrontpageController;
use App\Http\Controllers\frontpage\AuthController;
use App\Http\Controllers\manager\IndexManagerController;
use App\Http\Controllers\manager\ScanningController;
use App\Http\Controllers\manager\ReportController;
use App\Http\Controllers\templates\IndexTemplatesController;

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
// Route::get('/', 'frontpage\IndexFrontpageController@index');
Route::get('/' , [\App\Http\Controllers\frontpage\IndexFrontpageController::class,'index']);
// Route::get('/', 'IndexFrontpageController@index');


// Route::get('/login', 'frontpage\AuthController@index')->name('login');
Route::get('/login' , [\App\Http\Controllers\frontpage\AuthController::class,'index'])->name('login');
// Route::get('/login', 'AuthController@index')->name('login');

// Route::post('/auth/login', 'frontpage\AuthController@login')->name('redirectAuthLogin');
Route::post('/auth/login' ,[\App\Http\Controllers\frontpage\AuthController::class,'login'])->name('redirectAuthLogin');
// Route::post('/auth/login', 'AuthController@login')->name('redirectAuthLogin');

// Route::get('/logout', 'frontpage\AuthController@logout');
Route::get('/logout' , [\App\Http\Controllers\frontpage\AuthController::class,'logout']);
// Route::get('/logout', 'AuthController@logout');

// Route::get('/auth/google/redirect', 'frontpage\AuthController@redirectToProvider');
Route::get('/auth/google/redirect' , [\App\Http\Controllers\frontpage\AuthController::class,'redirectToProvider']);
// Route::get('/auth/google/redirect', 'AuthController@redirectToProvider');

// Route::get('/auth/google/callback', 'frontpage\AuthController@handleProviderCallback');
Route::get('/auth/google/callback' , [\App\Http\Controllers\frontpage\AuthController::class,'handleProviderCallback']);
// Route::get('/auth/google/callback', 'AuthController@handleProviderCallback');


// Route::get('/auth/facebook/redirect', 'frontpage\AuthController@redirectToProvider2');
Route::get('/auth/facebook/redirect' , [\App\Http\Controllers\frontpage\AuthController::class,'redirectToProvider2']);
// Route::get('/auth/facebook/redirect', 'AuthController@redirectToProvider2');

// Route::get('/auth/facebook/callback', 'frontpage\AuthController@handleProviderCallback2');
Route::get('/auth/facebook/callback' , [\App\Http\Controllers\frontpage\AuthController::class,'handleProviderCallback2']);
// Route::get('/auth/facebook/callback', 'AuthController@handleProviderCallback2');

// Route::get('/regis', 'frontpage\AuthController@regis');
Route::get('/regis' , [\App\Http\Controllers\frontpage\AuthController::class,'regis']);
// Route::get('/regis', 'AuthController@regis');

// Route::post('/auth/register', 'frontpage\AuthController@register')->name('redirectAuthRegister');
Route::post('/auth/register' , [\App\Http\Controllers\frontpage\AuthController::class,'register'])->name('redirectAuthRegister');
// Route::post('/auth/register', 'AuthController@register')->name('redirectAuthRegister');


// Route::get('/admin/dashboard', 'manager\indexController@index');
Route::get('/admin/dashboard' , [\App\Http\Controllers\manager\IndexManagerController::class,'index']);
// Route::get('/admin/dashboard', 'IndexManagerController@index');

// Route::post('/admin/send', 'manager\indexController@send')->name('send');
Route::post('/admin/send' , [\App\Http\Controllers\manager\IndexManagerController::class,'send'])->name('send');
// Route::post('/admin/send', 'IndexManagerController@send')->name('send');

// Route::get('/admin/scan', 'manager\ScanningController@index');
Route::get('/admin/scan' , [\App\Http\Controllers\manager\ScanningController::class,'index']);
// Route::get('/admin/scan', 'ScanningController@index');

// Route::post('/admin/scanning', 'manager\ScanningController@scanning')->name('scanning');
Route::post('/admin/scanning' , [\App\Http\Controllers\manager\ScanningController::class,'scanning'])->name('scanning');
// Route::post('/admin/scanning', 'ScanningController@scanning')->name('scanning');

Route::get('/admin/report' , [\App\Http\Controllers\manager\ReportController::class,'index']);
Route::get('/report/delete/{id}' , [\App\Http\Controllers\manager\ReportController::class,'delete']);

// Route::get('/pricelist', 'frontpage\indexController@pricelist');
Route::get('/pricelist' , [\App\Http\Controllers\frontpage\IndexFrontpageController::class,'pricelist']);
// Route::get('/pricelist', 'IndexFrontpageController@pricelist');


// Route::get('/init/invitation', 'manager\indexController@initInvitation');
Route::get('/init/invitation' , [\App\Http\Controllers\manager\IndexManagerController::class,'initInvitation']);
// Route::get('/init/invitation', 'IndexManagerController@initInvitation');

// Route::post('/create/invitation', 'manager\indexController@createInvitation')->name('create-invitation');
Route::post('/create/invitation' , [\App\Http\Controllers\manager\IndexManagerController::class,'createInvitation'])->name('create-invitation');
// Route::post('/create/invitation', 'IndexManagerController@createInvitation')->name('create-invitation');

// Route::get('{id}/themes/{theme}', 'templates\indexController@index');
Route::get('/admin/{id}/themes/{theme}' , [\App\Http\Controllers\templates\IndexTemplatesController::class,'index']);
// Route::get('{id}/themes/{theme}', 'IndexTemplatesController@index');

// Route::get('{id}/{idguest}/{wedding}/{name}', 'templates\indexController@share');
Route::get('{id}/{idguest}/{wedding}/{name}' , [\App\Http\Controllers\templates\IndexTemplatesController::class,'share']);
// Route::get('{id}/{idguest}/{wedding}/{name}', 'IndexTemplatesController@share');
Route::get('/clear-route', function(){
    $exitCode = \Artisan::call('route:cache');
    return '<h1>ROUTE CLEAR</h1>';
});
Route::get('/clear-cache', function(){
    $exitCode = \Artisan::call('cache:clear');
    return '<h1>CACHE CLEAR</h1>';
});