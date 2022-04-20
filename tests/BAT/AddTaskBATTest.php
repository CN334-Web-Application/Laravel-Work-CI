<?php

namespace Tests\BAT;

use Tests\TestCase;
use Illunminate\Support\Str;
use Fake\Generator as Faker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Task;
use App\Models\User;

class AddTaskBAT extends TestCase
{
    public function test_somthing() {
        $task = new Task([
            'id' => 1,
            'description' => 'Add new Task',
            'goal' => '2021-11-11',
            
        ]);
        $response = assertRedirect(RoutServiceProvider::Home);
    }
}
