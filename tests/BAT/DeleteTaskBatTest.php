<?php

namespace Tests\BAT;

use Tests\TestCase;
use Illunminate\Support\Str;
use Fake\Generator as Faker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Task;
use App\Models\User;

class DeleteTaskBatTest extends TestCase
{
   public function test_delete_task() {
        $this->assertTrue(true);
   }
}
