<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EmailTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_email_should_return_302_without_email_request(): void
    {
        $response = $this->post(route('email.send'));
        $response->assertStatus(302);
    }

    public function test_email_should_return_301_with_email_request(): void
    {
        $data = [
            "email" => "test@example.com",
        ];
        $response = $this->post(route('email.send'), $data);
        $response->assertStatus(301);
    }
}
