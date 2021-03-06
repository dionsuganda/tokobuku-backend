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

Route::get('/', 'DashboardController@index')->name('dashboard');
Route::get('logout', 'HomeController@logout')->name('logout');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('products/{id}/gallery', 'ProductController@gallery')
    ->name('products.gallery');
Route::resource('products', 'ProductController');

ROute::resource('product-galleries', 'ProductGalleryController');

Route::get('transactions/{id}/set-status', 'TransactionController@setStatus')
    ->name('transactions.status');
ROute::resource('transactions', 'TransactionController');