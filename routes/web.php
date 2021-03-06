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

// Page
Route::get('/', 'HomeController@index')->name('home');
Route::get('/categories', 'CategoryController@index')->name('categories');
Route::get('/details/{id}', 'DetailController@index')->name('detail');
Route::get('/cart', 'CartController@index')->name('cart');
Route::get('/success', 'SuccessController@index')->name('success');

// Register, Login
Route::get('/register/success', 'Auth\RegisterController@success')->name('register-success');

// Dashboard
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

// Product
Route::get('/dashboard/products', 'DashboardProductController@index')->name('dashboard-product');
Route::get('/dashboard/products/create', 'DashboardProductController@create')->name('dashboard-product-create');
Route::get('/dashboard/products/{id}', 'DashboardProductController@details')->name('dashboard-product-details');

// Transaction
Route::get('/dashboard/transactions', 'DashboardTransactionController@index')->name('dashboard-transaction');
Route::get('/dashboard/transactions/{id}', 'DashboardTransactionController@details')->name('dashboard-transaction-details');

// setting
Route::get('/dashboard/setting', 'DashboardSettingController@store')->name('dashboard-setting-store');
Route::get('/dashboard/account', 'DashboardSettingController@account')->name('dashboard-setting-account');

Auth::routes();

