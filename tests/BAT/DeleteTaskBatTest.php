<?php

namespace Tests\BAT;

use Tests\TestCase;
use Illunminate\Support\Str;
use Fake\Generator as Faker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Task;
use App\Models\User;

class DeleteTaskBATTest extends TestCase
{
   public function test_delete_task() {
      $task = new Task([
          'id' => 1,
          'description' => 'Test add test to todolist',
      ]);

      $this->delete('/tasks/'.$task->id);
      $this->assertDatabaseMissing('tasks',['id'=> $task->id]);
  }
}
