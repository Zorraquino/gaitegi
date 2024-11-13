<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EmailTest extends TestCase
{
    /**
     * Email send test with valid data
     */
    public function test_send_valid(): void 
    {
        $response = $this->post('/send-email', [
            'email' => 'test@example.com',
            'name' => 'Test User',
            'message' => 'This is a test message'
        ]);

        $response->assertStatus(200);
    }
}
