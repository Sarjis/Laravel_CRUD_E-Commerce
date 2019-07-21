<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    function index()
    {
        return view('front-end.checkout.checkout-content');
    }
}
