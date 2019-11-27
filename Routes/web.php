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

Route::prefix('setting_pdf')->middleware('auth')->group(function() {
	Route::put('', 'SettingPdfController@update')->name('setting_pdf.update');
});


Route::prefix('pdf')->middleware('auth')->group(function() {
		Route::get('{order}/download', 'PdfController@download')->name('pdf.download');
});

Route::prefix('pdf_layouts')->middleware('auth')->group(function() {
		Route::put('{pdf_layout}/update', 'PdfLayoutController@update')->name('pdf_layouts.update');
});