<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Task;
use App\Models\User;

class DatabaseCISeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "id" => 1,
            "name" => "Oh",
            "email" => "oh@gmail.com",
            "password" => "pass",
        ]);

        User::create([
            "id" => 2,
            "name" => "Real",
            "email" => "real@gmail.com",
            "password" => "pass",
        ]);

        User::create([
            "id" => 3,
            "name" => "Raf",
            "email" => "raf@gmail.com",
            "password" => "pass",
        ]);

        # Create Tasks for everyone
        Task::create([
            "id" => 1,
            "description" => "des 1",
            "user_id" => 1,
            "goal" => '2022-03-29 07:57:50'
        ]);

        Task::create([
            "id" => 2,
            "description" => "des 2",
            "user_id" => 2,
            "goal" => '2022-03-29 07:57:50'
        ]);

        Task::create([
            "id" => 3,
            "description" => "des 3",
            "user_id" => 3,
            "goal" =>'2022-03-29 07:57:50'
        ]);
    }
}