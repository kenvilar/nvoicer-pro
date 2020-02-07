<?php

/**
 * prefix: admin/company
 * namespace: Admin\Company
 */

Route::prefix('data')->namespace('Data')->group(function () {
    Route::get('/details', 'CompanyDetailsController@details');
});
