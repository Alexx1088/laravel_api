<?php

namespace Tests\Feature\API\V1;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_index()
    {
        $response = $this->get('/api/v1/users');

        $response->assertStatus(200);
    }

    public function test_show()
    {
        $response = $this->get('/api/v1/users');

        $response->assertStatus(200);
    }

    public function test_store()
    {
        $response = $this->get('/api/v1/users');

        $response->assertStatus(200);
    }

    public function test_update()
    {
        $response = $this->get('/api/v1/users');

        $response->assertStatus(200);
    }

    public function test_destroy()
    {
        $response = $this->get('/api/v1/users');

        $response->assertStatus(200);
    }
}
