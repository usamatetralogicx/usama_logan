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



Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/link', 'HomeController@LinkSettings')->name('link');
    Route::get('/exports', 'HomeController@Exports')->name('exports');
    Route::get('/imports', 'HomeController@Imports')->name('imports');
    Route::get('/exports/download', 'HomeController@exportDownload')->name('exports.download');
    Route::post('/link/generate', 'HomeController@LinkGenerate')->name('link.generate');
    Route::get('/contacts', 'HomeController@Contacts')->name('contacts');
    Route::any('/users', 'HomeController@Users')->name('users');
    Route::get('/contact/delete/{id}', 'HomeController@ContactDelete')->name('contact.delete');
    Route::get('logout', 'HomeController@Logout')->name('logout');
    Route::get('search','HomeController@alphabetic')->name('alphabatic_search');
});

Route::get('/{id}', 'HomeController@UserLink')->name('user.link.view');
Route::post('/contacts', 'HomeController@ContactsUpdate')->name('contacts.post');



