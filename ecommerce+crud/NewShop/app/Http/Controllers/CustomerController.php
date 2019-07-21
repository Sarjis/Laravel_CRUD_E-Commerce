<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Session;

class CustomerController extends Controller
{
    function customerRegistration(Request $request)
    {
        $this->validate($request, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:customers'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        $customer = new Customer();
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->email = $request->email;
        $customer->phone_number = $request->phone_number;
        $customer->address = $request->address;
        $customer->password = $request->password;
        $customer->save();


        $customerId = $customer->id;
        $customerName = $customer->first_name.' '.$customer->last_name;
        Session::put('customerId', $customerId);
        Session::put('customerName', $customerName);
        $data = $customer->toArray();
        Mail::send('front-end.mail.confirmation-mail', $data, function ($message) use ($data) {
            $message->to($data['email']);
            $message->subject('Confirmation_Mail2');
        });
        return redirect('/');
    }

    function customerLogin()
    {
        return 'customerLogin';
    }
}
