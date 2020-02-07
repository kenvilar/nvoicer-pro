<?php

/**
 * Invoicing related routes
 * name: admin.customers
 * namespace: Admin\Customers
 * prefix: admin/customers.
 */

Route::get('/', 'CustomersController@index')->name('dashboard');
Route::get('/create', 'CustomersController@create')->name('create');
Route::get('/show/{customer}', 'CustomersController@show')->name('show');
Route::get('/edit/{customer}', 'CustomersController@edit')->name('edit');

Route::post('/store', 'CustomersController@store')->name('store');
Route::put('/update/{customer}', 'CustomersController@update')->name('update');
Route::delete('/delete/{customer}', 'CustomersController@destroy')->name('delete');

Route::prefix('data')->namespace('Data')->group(function () {
    Route::get('/all', 'CustomersController@all');
    Route::get('/show/{customer}', 'CustomersController@show');
});
