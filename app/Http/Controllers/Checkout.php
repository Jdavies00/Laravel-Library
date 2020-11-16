<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;


class CheckoutController extends Controller
{
    public function index()
    {
        $checkout = Checkout::all();
        return $checkout ->toArray();
    }

    //show a single book
    public function show($id)
    {
        $checkout = Checkout::find($id);
        return view('checkout.show',['checkout' => $checkout]);
    }
    //
    public function create(Request $request)
    {
        $checkout = new Checkout;
        $input= $request -> all ();
        $checkout -> name = $input ['name'];
        $checkout -> save ();
    }}
