<?php

namespace Tests\Feature\Auth;

use http\Client\Curl\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class RegistrationTest extends TestCase
{

    public function test_new_user_can_register(): void
    {
        $fakeEmail = fake()->email();
        $newUser = [
            'first_name' => 'John',
            'last_name' => ' Doe',
            'email' => $fakeEmail,
            'password' => 'password123',
        ];
        $response = $this->post('/registration', $newUser);
        $response->assertStatus(200);
        $this->assertDatabaseHas('users', [
            'email' => $fakeEmail
        ]);
    }


}
