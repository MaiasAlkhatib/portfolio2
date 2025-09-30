<?php

namespace App\Http\Controllers;

use App\Models\Customer; // استدعاء الموديل
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all(); // جلب كل العملاء من قاعدة البيانات
        return view('customers.index', compact('customers'));
    }
}
