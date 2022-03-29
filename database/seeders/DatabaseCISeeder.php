<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use app\Models\Task;
use app\Models\User;

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
            "password" => "pass"
        ]);

        User::create([
            "id" => 2,
            "name" => "Real",
            "email" => "real@gmail.com",
            "password" => "pass"
        ]);

        User::create([
            "id" => 3,
            "name" => "Raf",
            "email" => "raf@gmail.com",
            "password" => "pass"
        ]);

        # Create 3 Tasks for everyone
        for ($x = 1; $x <= 9; $x++) {
            $id = ceil($x / 3);

            Task::create([
                "description" => "des $x",
                "user_id" => "$id"
            ]);
        }
    }
}