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
    Route::get('/link', 'HomeController@LinkSettings')->name('link');
    Route::get('/exports', 'HomeController@Exports')->name('exports');
    Route::get('/exports/download', 'HomeController@exportDownload')->name('exports.download');
    Route::post('/link/generate', 'HomeController@LinkGenerate')->name('link.generate');
    Route::get('/contacts', 'HomeController@Contacts')->name('contacts');
    Route::post('/contacts', 'HomeController@ContactsUpdate')->name('contacts.post');
    Route::any('/users', 'HomeController@Users')->name('users');
    Route::get('/contact/{id}/delete', 'HomeController@ContactDelete')->name('contact.delete');
});

Route::get('/{id}', 'HomeController@UserLink')->name('user.link.view');



