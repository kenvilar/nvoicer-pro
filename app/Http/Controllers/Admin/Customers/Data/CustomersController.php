<?php

namespace App\Http\Controllers\Admin\Customers\Data;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function all()
    {
        return response()->json(['customers' => Customer::query()->select(['id', 'name',])->get()]);
    }

    public function show(Customer $customer)
    {
        return response()->json(['customer' => Customer::query()->find($customer)]);
    }
}
