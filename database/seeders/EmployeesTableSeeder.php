<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('employees')->insert([
            ['first_name' => 'Ali', 'last_name' => 'Ahmed', 'email' => 'ali.ahmed@example.com'],
            ['first_name' => 'Sara', 'last_name' => 'Hassan', 'email' => 'sara.hassan@example.com'],
        ]);
    }
}
