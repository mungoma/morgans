<?php

use App\Http\Controllers\ApartmentsController;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\ServiceRequestsController;
use App\Http\Controllers\TenantsController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/Apartments', 'App\Http\Controllers\ApartmentsController@index')->name('apartments');

Route::group(['middleware' => 'auth'], function () {

	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
    Route::resource('/Apartments', ApartmentsController::class);
    Route::resource('/Tenants', TenantsController::class);
    Route::resource('/Bookings', BookingsController::class);
    Route::resource('/Payments', PaymentsController::class);
    Route::resource('/ServiceRequests', ServiceRequestsController::class);
    Route::get('/Apartments', 'App\Http\Controllers\ApartmentsController@index')->name('apartments');

});

