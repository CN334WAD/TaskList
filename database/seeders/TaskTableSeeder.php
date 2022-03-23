<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::truncate();

        for ($i=1; $i <= 10; $i++) { 
            Task::create([
                "description" => "Working",
                "user_id" => $i,
            ]);
            Task::create([
                "description" => "study",
                "user_id" => $i,
            ]);
            Task::create([
                "description" => "hang out",
                "user_id" => $i,
            ]);
        }
        
    }
}

