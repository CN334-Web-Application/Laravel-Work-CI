<?php

namespace Tests\BAT;

use App\Providers\RouteServiceProvider;
use Tests\TestCase;
use Illunminate\Support\Str;
use Fake\Generator as Faker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Task;
use App\Models\User;

class AddTaskBAT extends TestCase
{
    //Test Schema ทดสอบ description รองรับภาษาอังกฤษไหม
    public function test_add_task() {
        $task = new Task([
            'id' => 1,
            'description' => 'Add new Task',
            'goal_date' => '2021-11-11',
        ]);
        $this -> assertEquals('Add new Task', $task -> description);
    }

    //Test Schema ทดสอบ description รองรับภาษาไทยไหม
    public function test_add_thai_language()
    {
        $task = new Task([
            'id' => 1,
            'description' => 'ทดสอบการเพิ่มข้อความด้วยภาษาไทย',
            'goal_date' => '2021-11-11',
        ]);

        $this -> assertEquals('ทดสอบการเพิ่มข้อความด้วยภาษาไทย', $task -> description);
    }

    //Test Schema ทดสอบ goal date
    public function test_add_goal_date()
    {
        $task = new Task([
            'id' => 1,
            'description' => 'Add new Task',
            'goal_date' => '2022-1-1',
        ]);
        $this -> assertEquals('2022-1-1', $task -> goal_date);
    }

    //Test Schema ทดสอบ goal date รองรับตัวอักษรภาษาอังกฤษไหม
    public function test_add_other_language_goal_date()
    {
        $task = new Task([
            'id' => 1,
            'description' => 'Add new Task',
            'goal_date' => '2022-1-one',
        ]);
        $this -> assertEquals('2022-1-one', $task -> goal_date);
    }

    //Test Schema ทดสอบ goal สามารถว่างเปล่าได้ไหม
    public function test_add__null_goal_date()
    {
        $task = new Task([
            'id' => 1,
            'description' => 'Add new Task',
            'goal_date' => null,
        ]);
        $this -> assertEquals(null, $task -> goal_date);
    }
}
