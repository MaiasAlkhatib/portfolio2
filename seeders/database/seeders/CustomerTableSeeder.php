<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
            ['first_name' => 'John', 'last_name' => 'Doe', 'email' => 'john@example.com'],
            ['first_name' => 'Jane', 'last_name' => 'Smith', 'email' => 'jane@example.com'],
            ['first_name' => 'Ali', 'last_name' => 'Khan', 'email' => 'ali@example.com'],
        ]);
    }
}
