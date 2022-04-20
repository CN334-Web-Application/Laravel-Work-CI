<?php

namespace Tests\BAT;

use PHPUnit\Framework\TestCase;
use Illunminate\Support\Str;
use Fake\Generator as Faker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Task;
use App\Models\User;

class EditTaskBAT extends TestCase
{
    public function test_edit_task() {
        $task = new Task([
            'id' => 1,
            'description' => 'Add new Task',
            'goal_date' => '2021-11-11',
        ]);
        // $task['description' == 'Edit Task'];
        $task-> description = 'Edit Task';
        echo($task);
        $this -> assertStringConTainsString('Edit Task', $task -> description);
    }

    public function test_edit_thai_task() {
        $task = new Task([
            'id' => 1,
            'description' => 'Add new Task',
            'goal_date' => '2021-11-11',
        ]);
        // $task['description' == 'Edit Task'];
        $task-> description = 'แก้ไข Task';
        $this -> assertStringConTainsString('แก้ไข Task', $task -> description);
    }

    public function test_edit_space_task() {
        $task = new Task([
            'id' => 1,
            'description' => 'Add new Task',
            'goal_date' => '2021-11-11',
        ]);
        $task-> description = ' ';
        $this -> assertStringConTainsString(' ', $task -> description);
    }
}
