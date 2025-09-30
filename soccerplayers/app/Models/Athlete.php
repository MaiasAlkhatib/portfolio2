<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Athlete extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'sport', 'club', 'salary', 'active', 'date_of_birth', 'total_goals'
    ];
}
