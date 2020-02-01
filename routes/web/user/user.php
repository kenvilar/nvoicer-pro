<?php

/*
 * Route::prefix('user')->namespace('User')->name('user.')->group(base_path('routes/web/user/user.php'));
 */

Route::get('/', 'DashboardController@index')->name('dashboard');
