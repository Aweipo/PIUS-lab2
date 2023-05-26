<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Routing\Controller;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomersController extends Controller
{
    public function customers(Request $request): View
    {
        //return view('welcome');
        $isBlocked = $request->query('isBlocked');
        $email = $request->query('email');
        $name = $request->query('name');;
        $surname = $request->query('surname');
        $phone = $request->query('phone');
        if(!empty($isBlocked))
        {
            $customers = Customer::where('is_blocked',1)->paginate(50);
        }
        else if(!empty($email))
        {
        
            $customers = Customer::where('email','like','%' . $email . '%')->paginate(50);
        }
        else if(!empty($phone))
        {
            $customers = Customer::where('phone','like','%' . $phone . '%')->paginate(50);
        }
        else if(!empty($name))
        {
            if(empty($surname))
            {
                $customers = Customer::where('name','like','%' . $name . '%')->paginate(50);
            }
            else
            {
                        $customers = Customer::where('name','like','%' . $name . '%')->where('surname','like','%' . $surname . '%')->paginate(50);
            }
        }
        else if (!empty($surname))
        {
            $customers = Customer::where('surname','like','%' . $surname . '%')->paginate(50);
        }
        else
        {
            $customers = Customer::paginate(50);
        }
        return view('customers')->with('customers', $customers)->with('isBlocked', $isBlocked)->with('phone',$phone)->with('email',$email)->with('name',$name)->with('surname',$surname);
    }
    
}