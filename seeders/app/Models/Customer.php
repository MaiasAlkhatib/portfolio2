<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // إذا اسم الجدول مختلف عن اسم الموديل + s، تحتاج تحدده هنا
    // protected $table = 'customers';
}
