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
        // $table->id();
        // $table->string('description');
        // $table->date('goal');
        // $table->integer('user_id')->unsigned()->index();
        // $table->timestamps();

        $task = new Task([
            'id' => 1,
            'description' => 'Test add test to todolist',
        ]);
    }

    //Test Schema ทดสอบ รองรับภาษาไทยไหม

    //Test Schema ทดสอบ รองรับภาษาอังกฤษไหม

    //Test Schema ทดสอบ describtion สามารถว่างเปล่าได้ไหม

    //Test Schema ทดสอบ goal สามารถว่าเปล่าได้ไหม

    //Test Schema ทดสอบ timstamps ไม่มีค่าได้ไหม

    //Test Schema ทดสอบ timstamps เป็นวันที่ไม่มีอยู่จริงได้ไหม
}
