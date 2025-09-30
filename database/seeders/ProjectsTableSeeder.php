<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('projects')->insert([
            ['name' => 'Project A', 'client' => 'Client X', 'start_date' => '2025-01-01', 'end_date' => '2025-06-01'],
            ['name' => 'Project B', 'client' => 'Client Y', 'start_date' => '2025-02-01', 'end_date' => '2025-08-01'],
        ]);
    }
}