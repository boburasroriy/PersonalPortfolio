<?php

namespace Tests\Feature;

use App\Http\Middleware\IsAdmin;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Http\Request;

class AdminMiddlewareTest extends TestCase
{
    use RefreshDatabase;
    public function test_admin_can_access_protected_route()
    {
        $admin = User::factory()->create(['role_id' => 2]);
        $request = Request::create('/dashboard', 'GET');
        $request->setUserResolver(function () use ($admin) {
            return $admin;
        });
        $middleware = new IsAdmin();
        $response = $middleware->handle($request, function ($req) {
            return 'next';
        });
        $this->assertEquals('next', $response);
    }

}
