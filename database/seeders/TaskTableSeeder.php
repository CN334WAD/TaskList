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

        for ($i=1; $i < 10; $i++) { 
            Task::create([
                "description" => "Hardik Savani",
                "user_id" => $i,
            ]);
        }
        
    }
}

