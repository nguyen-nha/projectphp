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
Route::post('export', 'MyController@export')->name('export');
Route::get('importExportView', 'MyController@importExportView');
Route::post('/import-csv', 'MyController@import_csv')->name('import');
Route::get('/', function () {
    return view('welcome');
});
