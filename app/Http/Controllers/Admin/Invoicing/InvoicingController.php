<?php

namespace App\Http\Controllers\Admin\Invoicing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoicingController extends Controller
{
    public function index()
    {
        return view('admin.invoicing.index');
    }
}
