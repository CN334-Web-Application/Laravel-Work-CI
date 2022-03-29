<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illunminate\Support\Str;
use Fake\Generator as Faker;
use app\Models\Task;

class UserUnitTest extends TestCase
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
        // $table->id();
        // $table->string('description');
        // $table->date('goal');
        // $table->integer('user_id')->unsigned()->index();
        // $table->timestamps();

        Task::create([
            'id' => 10,
            'description' => "Test text laravel todo list",
            'goal' => '2022-1-1',
        ]);
    }

    //Test Schema ทดสอบ รองรับภาษาไทยไหม

    //Test Schema ทดสอบ รองรับภาษาอังกฤษไหม

    //Test Schema ทดสอบ describtion สามารถว่างเปล่าได้ไหม

    //Test Schema ทดสอบ goal สามารถว่าเปล่าได้ไหม

    //Test Schema ทดสอบ timstamps ไม่มีค่าได้ไหม

    //Test Schema ทดสอบ timstamps เป็นวันที่ไม่มีอยู่จริงได้ไหม
}