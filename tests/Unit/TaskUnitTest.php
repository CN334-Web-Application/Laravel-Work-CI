<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illunminate\Support\Str;
use Fake\Generator as Faker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Task;
use app\Model
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

        User::create({
            'id' => 1,
            'name' => 'sarayut',
            'email' => 'sarayut@gmail.com',
            'password' => 'sarayut12345'
        });

        Task::create([
            'id' => 1,
            'description' => "Test text laravel todo list",
            'goal' => '2022-1-1',
            // 'user_id' => '10',
        ]);
    }

    //Test Schema ทดสอบ รองรับภาษาไทยไหม

    //Test Schema ทดสอบ รองรับภาษาอังกฤษไหม

    //Test Schema ทดสอบ describtion สามารถว่างเปล่าได้ไหม

    //Test Schema ทดสอบ goal สามารถว่าเปล่าได้ไหม

    //Test Schema ทดสอบ timstamps ไม่มีค่าได้ไหม

    //Test Schema ทดสอบ timstamps เป็นวันที่ไม่มีอยู่จริงได้ไหม
}
