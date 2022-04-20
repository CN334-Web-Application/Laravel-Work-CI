<?php

namespace Tests\BAT;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Fortify\Features;
use Laravel\Jetstream\Jetstream;
use Tests\TestCase;


class RegisterBATTest extends TestCase
{
    use RefreshDatabase;

    public function test_registration_screen_can_be_rendered()
    {
        if (! Features::enabled(Features::registration())) {
            return $this->markTestSkipped('Registration support is not enabled.');
        }

        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function clicked_registers() {
        $this->visit('/')
         ->click('Regiter')
         ->seePageIs('/register');
    }

    public function test_new_thai_users_can_register()
    {
        $response = $this->post('/register', [
            'name' => 'ธนพล ฟลัวกลา',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }
    //test Register with special characters
    //test register with no password
    //test with passwoord less than 8 characters
    //test password with thai language
    //test alert with empty input 
    //test if repeat password is not the same with password
}
