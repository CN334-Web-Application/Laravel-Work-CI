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
    public function test_add_task() {
        $task = new Task([
            'id' => 1,
            'description' => 'Add new Task',
            'goal_date' => '2021-11-11',
        ]);
        $this -> assertEquals('Add new Task', $task -> description);
    }
}
