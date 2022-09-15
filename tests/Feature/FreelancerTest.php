<?php

namespace Tests\Feature;

use App\Models\Freelancer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FreelancerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_freelancer_index(): void
    {
        $response = $this->get('/api/freelancers');

        $response->assertStatus(200);

        // Create Freelancer so that the response returns it.
        //Freelancer::factory()->create();

        $this->getJson('/api/freelancers')->assertOk();
    }
}
