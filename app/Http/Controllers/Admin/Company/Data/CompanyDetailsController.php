<?php

namespace App\Http\Controllers\Admin\Company\Data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyDetailsController extends Controller
{
    public function details()
    {
        return response()->json(['company' => config('company')]);
    }
}
