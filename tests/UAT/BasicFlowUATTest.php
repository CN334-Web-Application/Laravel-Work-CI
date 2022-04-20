<?php

namespace Tests\BAT;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Fortify\Features;
use Laravel\Jetstream\Jetstream;
use Tests\TestCase;
use App\Models\Task;
use App\Models\User;

class BasicFlowUATTest extends TestCase
{
    use RefreshDatabase;

    public function test_add_task() {
        $task = new Task([
            'id' => 1,
            'description' => 'Test add test to todolist',
        ]);

        $this -> assertEquals('Test add test to todolist', $task -> description);
    }
   
    public function test_edit_task() {
        $task = new Task([
            'id' => 1,
            'description' => 'Add test to todolist',
        ]);

        $task->description = 'Test edit';

        $this -> assertEquals('Test edit', $task -> description);
    }

    public function test_delete_task() {
        $task = new Task([
            'id' => 1,
            'description' => 'Test add test to todolist',
        ]);

        $this->delete('/tasks/'.$task->id);
        $this->assertDatabaseMissing('tasks',['id'=> $task->id]);
    }

    public function test_login() {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }

    public function test_register() {
        $response = $this->post('/register', [
            'name' => 'Test User',
            'email' => 'test@gmail.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }
} 