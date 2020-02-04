<?php

/**
 * Invoicing related routes
 * name: admin.customers
 * namespace: Admin\Customers
 * prefix: admin/customers.
 */

Route::get('/', 'CustomersController@index')->name('dashboard');
Route::get('/create', 'CustomersController@create')->name('create');
Route::post('/store', 'CustomersController@store')->name('store');
