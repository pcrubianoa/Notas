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

Route::get('/', function () {
    return view('website');
});

Auth::routes();

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/tablero', 'HomeController@index')->name('home');
    Route::resource('periods', 'Admin\PeriodController');
    //Route::delete('permissions_mass_destroy', 'Admin\PermissionsController@massDestroy')->name('permissions.mass_destroy');
    Route::resource('permissions', 'Admin\PermissionsController');
});

Route::get('/route-list', function () {
    Artisan::call('route:list');

    return '<pre>'.Artisan::output();
});
