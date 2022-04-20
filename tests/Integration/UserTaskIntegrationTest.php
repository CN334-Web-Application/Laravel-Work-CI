<?php

namespace Tests\Integration;

use Tests\TestCase;
use Illunminate\Support\Str;
use Fake\Generator as Faker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Task;
use App\Models\User;

class UserTaskIntegrationTest extends TestCase
{
    public function test_1_user_0_task() {
        $this->assertTrue(true);
    }

    public function test_1_user_1000_tasks() {
        $this->assertTrue(true);
    }

    public function test_1_task_2_users() {
        $this->assertTrue(true);
    }

    public function test_1_user_2_same_task() {
        $this->assertTrue(true);
    }

    public function test_2_user_same_task() {
        $this->assertTrue(true);
    }

    public function test_delete_user_and_task() {
        $this->assertTrue(true);
    }

    public function test_delete_user() {
        #Task should removed
        $this->assertTrue(true);
    }

    public function test_1_task_0_user() {
        $this->assertTrue(true);
    }
}

//test user 1 have 0 task
//task user 1 have 1000 tasks
//1 task have 2 users
//1 user have 2 the same task 
//2 user have the same task
//delete user and delete task
//delete task but not delete user
//task no user should not mem on db