<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Conekta\Conekta;
class PaymentController extends Controller
{
    public function index(){
        return view('payment.index');
    }
    public function show(){
        
    }
}
