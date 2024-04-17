<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_user_can_login(): void
    {
        $fakeEmail = fake()->email();

        $user = \App\Models\User::factory()->create([
            'email' => $fakeEmail,
            'password' => bcrypt('password123'),
        ]);
        $loginData = [
            'email' => $fakeEmail,
            'password' => 'password123',
        ];
//        $response = $this->postJson('/signIn', $loginData);
//        $response->assertStatus(302);
//        $response->assertJsonStructure(['token']);
//        $this->assertAuthenticated();
        $response = $this->post('/signIn', $loginData);
        $response->assertStatus(302); // Assuming the signIn method redirects upon successful login
        $this->assertAuthenticated();
    }


}
