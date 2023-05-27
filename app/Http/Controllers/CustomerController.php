<?php

namespace App\Http\Controllers;

use App\Models\Adress;
use App\Models\Customer;
use Illuminate\Routing\Controller;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Exception;

class CustomerController extends Controller
{
    public function customer(Request $request, String $id): View
    {
        try
        {
            $customer = Customer::where('id',$id)->firstOrFail();
            $adresses = Adress::where('customer_id',$id);
            return view('exact_customer')->with('adresses', $adresses)->with('customer',$customer);
        }
        catch (Exception)
        {
            abort(404);
        }
        
    }

}