<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illunminate\Support\Str;
use Fake\Generator as Faker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Task;
use App\Models\User;

class TaskUnitTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function test_add_todolist()
    {
        $task = new Task([
            'id' => 1,
            'description' => 'Test add test to todolist',
        ]);

        $this -> assertEquals('Test add test to todolist', $task -> description);

    }

    //Test Schema ทดสอบรองรับภาษาไทยไหม
    public function test_add_thai_language()
    {
        $task = new Task([
            'id' => 1,
            'description' => 'ทดสอบการเพิ่มข้อความด้วยภาษาไทย',
        ]);

        $this -> assertEquals('ทดสอบการเพิ่มข้อความด้วยภาษาไทย', $task -> description);
    }

    public function test_add_goal_date()
    {
        $task = new Task([
            'id' => 1,
            'goal_date' => '2022-1-1',
        ]);
        $this -> assertEquals('2022-1-1', $task -> goal_date);
    }

    public function test_add__null_goal_date()
    {
        $task = new Task([
            'id' => 1,
            'goal_date' => null,
        ]);
        $this -> assertEquals(null, $task -> goal_date);
    }

    // public function test_add_spaceText_goal_date()
    // {
    //     $task = new Task([
    //         'id' => 1,
    //         'goal_date' => '',
    //     ]);
    //     $this -> assertEquals('2022-1-1', $task -> goal_date);
    // }

    //Test Schema ทดสอบ รองรับภาษาอังกฤษไหม

    //Test Schema ทดสอบ describtion สามารถว่างเปล่าได้ไหม

    //Test Schema ทดสอบ goal สามารถว่าเปล่าได้ไหม

    //Test Schema ทดสอบ timstamps ไม่มีค่าได้ไหม

    //Test Schema ทดสอบ timstamps เป็นวันที่ไม่มีอยู่จริงได้ไหม
}
