<?php

namespace Tests\BAT;

use PHPUnit\Framework\TestCase;
use Illunminate\Support\Str;
use Fake\Generator as Faker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Task;
use App\Models\User;

class BasicFlowUAT extends TestCase
{
   public function delete_task() {
        $this->assertTrue(true);
   }
}
//add task 
//edit task
//delete task
//login 
//register
//forgot password
//edit username
//edit email
//edit password
//edit profilePhotos
//edit status