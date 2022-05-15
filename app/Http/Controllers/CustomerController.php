<?php

namespace App\Http\Controllers;

use App\Models\Customer;

use Inertia\Inertia;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function index(Request $request) {
        $customers = Customer::paginate(5);
        
        return Inertia::render('Customers', [
            'customers' => $customers
        ]);
    }
}
