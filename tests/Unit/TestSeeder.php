<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illunminate\Support\Str;
use Fake\Generator as Faker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use app\Models\User;

class TestSeeder extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "Sara",
            'id' => 10
        ]);
    }
}