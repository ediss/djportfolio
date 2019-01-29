<?php

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

Route::prefix('projects')->group(function () {
    Route::get('',     'ProjectController@index')   ->name('projects');

    Route::get('/{id}', 'ProjectController@index')  ->name('getProjects');

});


Route::prefix('admin')->group(function () {
    Route::get('',                            'AdminController@index');

    Route::get('/unos-fotografije',           'AdminController@insertPhoto')    ->name('admin.insertPhoto');

    Route::post('/unos-fotografije',          'AdminController@photoUpload')    ->name('admin.upload.image');

    Route::get('/upravljanje-fotografijama',  'AdminController@getPhotos')      ->name('admin.orderPhotos');
    

});
Route::post('admin/upravljanje-pozicijama',       'AjaxController@updatePhotoPosition');

Route::get('/contact',  'ContactController@index')->name('contact');




