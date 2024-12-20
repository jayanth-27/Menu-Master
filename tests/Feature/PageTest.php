<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_homepage()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_courtsidepage()
    {
        $response = $this->get('/courtside');

        $response->assertStatus(200);
    }
    public function test_beachsidepage()
    {
        $response = $this->get('/beachside');

        $response->assertStatus(200);
    }
    public function test_riversidepage()
    {
        $response = $this->get('/riverside');

        $response->assertStatus(200);
    }
}
