<?php

/**
 *  Route::prefix('admin')->namespace('Admin')->name('admin.')->group(base_path('routes/web/admin/admin.php'));
 */

Route::prefix('invoicing')->namespace('Invoicing')->name('invoicing.')->group(base_path('routes/web/admin/invoicing.php'));
Route::prefix('customers')->namespace('Customers')->name('customers.')->group(base_path('routes/web/admin/customers.php'));
Route::prefix('company')->namespace('Company')->name('company.')->group(base_path('routes/web/admin/company.php'));
