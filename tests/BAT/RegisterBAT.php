<?php

namespace Tests\BAT;

use PHPUnit\Framework\TestCase;
use Illunminate\Support\Str;
use Fake\Generator as Faker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Task;
use App\Models\User;

class RegisterBAT extends TestCase
{
    public function delete_task() {
        $this->assertTrue(true);
    }
}
