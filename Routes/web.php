<?php

Route::prefix('setting_pdf_columns')->middleware('auth')->group(function() 
{
	Route::put('', 'SettingPdfColumnController@update')->name('setting_pdf_columns.update');
});

Route::prefix('setting_pdf')->middleware('auth')->group(function() {
	Route::put('', 'SettingPdfController@update')->name('setting_pdf.update');
});


Route::prefix('pdf')->middleware('auth')->group(function() {
		Route::get('{order}/download', 'PdfController@download')->name('pdf.download');
});

Route::prefix('pdf_layouts')->middleware('auth')->group(function() {
		Route::put('{pdf_layout}/update', 'PdfLayoutController@update')->name('pdf_layouts.update');
});