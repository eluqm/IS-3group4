<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LinkRepositoryControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_link_repository_displays_areas_view()
    {
        $response = $this->get('/services/link_repository');
        
        $response->assertViewIs('link_repository');
        $response->assertStatus(200);
    }

    public function test_link_repository_displays_schools_view()
    {
        $areas = [ 'ing', 'bio', 'soc' ];
        $area = $areas[rand(0, 2)];

        $response = $this->get('/services/link_repository/' . $area);
        
        $response->assertViewIs('link_repository');
        $response->assertStatus(200);
    }
}
