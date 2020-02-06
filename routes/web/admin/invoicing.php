<?php

/**
 * Invoicing related routes
 * name: admin.invoicing.
 * namespace: Admin\Invoicing
 * prefix: admin/invoicing
 */

Route::get('/', 'InvoicingController@index')->name('dashboard');
Route::get('/create', 'InvoicingController@create' )->name('create');

Route::get('/store', 'InvoicingController@store' )->name('store');

Route::prefix('settings')->namespace('Settings')->name('settings.')->group(function () {
    Route::get('/', 'SettingsController@index')->name('dashboard');
});
