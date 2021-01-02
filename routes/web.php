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

/*localhost/dashboard/
localhost/dashboard/products */

Route::namespace('Dashboard')->middleware('auth')->name('dashboard.')->prefix('admin')->group(function(){

    Route::get('/', 'DashboardController@index')->name('index');
    Route::resource('products', 'ProductController');
    Route::resource('Users', 'UserController');
    Route::resource('Categories', 'CategoryController');
    
    

});

 
Route::get('login', 'AuthController@login')->name('login');
Route::post('authenticate', 'AuthController@authenticate')->name('authenticate');
Route::get('logout', 'AuthController@logout')->name('logout');
Route::get('register', 'AuthController@register')->name('register');
Route::post('register', 'AuthController@do_register')->name('do_register');

Route::get('train', 'TrainController@querybuilder');
Route::get('orm', 'TrainController@orm');

Route::get('/', 'FrontSiteController@showHome')->name('frontSite.index');
Route::get('/blog', 'FrontSiteController@showBlog')->name('frontSite.blog');
Route::get('/about', 'FrontSiteController@showAbout')->name('frontSite.about');
Route::get('/contacts', 'FrontSiteController@showContacts')->name('frontSite.contacts');
Route::get('/services', 'FrontSiteController@showServices')->name('frontSite.services');





Route::resource('users','Dashboard\UserController');