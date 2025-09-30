<?php

use App\Models\Athlete;
use Illuminate\Support\Facades\Route;

Route::get('/add-player', function () {
    $player = Athlete::create([
        'name' => 'Kylian Mbappé',
        'sport' => 'Football',
        'club' => 'Paris Saint-Germain',
        'salary' => 30000000,
        'active' => true,
        'date_of_birth' => '1998-12-20',
        'total_goals' => 200
    ]);

    return "Player added: " . $player->name;
    
});
Route::get('/players', function () {
    $players = Athlete::all(); // يجلب كل اللاعبين من جدول athletes
    return view('players', ['players' => $players]); // يرسلهم لملف Blade
});
