<?php

/**
 * Invoicing related routes
 * name: admin.invoicing.
 * namespace: Admin\Invoicing
 * prefix: admin/invoicing
 */

Route::get('/', 'InvoicingController@index')->name('dashboard');

Route::prefix('settings')->namespace('Settings')->name('settings.')->group(function () {
    Route::get('/', 'SettingsController@index')->name('dashboard');
});
