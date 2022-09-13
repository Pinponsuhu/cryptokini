<?php

namespace Tests\Unit;

use Tests\TestCase;

class RoutesTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_home_page(){
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_faq(){
        $response = $this->get('/faq');

        $response->assertStatus(200);
    }
    public function test_contacts(){
        $response = $this->get('/contact');

        $response->assertStatus(200);
    }
    public function test_dashboard(){
        $response = $this->get('/dashboard');

        $response->assertStatus(302);
    }
}
