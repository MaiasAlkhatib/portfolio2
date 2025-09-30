<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController; // ← هذا هو السطر المهم

Route::get('/', function () {
    return view('welcome');
});

// Route جديد لعرض العملاء
Route::get('/customers', [CustomerController::class, 'index']);
