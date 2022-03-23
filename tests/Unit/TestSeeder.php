<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illunminate\Support\Str;
use Fake\Generator as Faker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TestSeeder extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        // Run the DatabaseSeeder...
        $this->seed();

        // Run a specific seeder...
        $this->seed(OrderStatusSeeder::class);

        $response = $this->get('/');
    }
}