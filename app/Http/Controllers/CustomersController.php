<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Routing\Controller;
use Illuminate\View\View;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function customers(Request $request): View
    {
        //return view('welcome');
        $customers = Customer::all();
        return view('customers')->with('customers', $customers);
    }
    
    public function customer(Request $request): View
    {
        return view('welcome');
    }
}