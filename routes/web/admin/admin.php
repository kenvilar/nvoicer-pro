<?php

/**
 *  Route::prefix('admin')->namespace('Admin')->name('admin.')->group(base_path('routes/web/admin/admin.php'));
 */

Route::prefix('invoicing')->namespace('invoicing')->name('invoicing.')->group(base_path('routes/web/admin/invoicing.php'));
