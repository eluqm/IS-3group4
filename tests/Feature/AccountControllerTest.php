<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\User;
use App\Models\School;

class AccountControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_account_does_not_displays_account_view_to_guests()
    {
        $response = $this->get('/account');
        $response->assertRedirect('login');
    }

    public function test_account_displays_the_account_view_to_users()
    {
        // first login
        $user = User::factory()->make();
        $this->actingAs($user);

        $response = $this->get(route('account'));
        $response->assertStatus(200);
        $response->assertViewIs('account');
    }

    public function test_save_school_of_user_works()
    {
        // first login
        $user = User::factory()->make();
        $this->actingAs($user);

        $school = School::factory()->make();
        $school->save();
        $school_id = $school->id;

        $response = $this->post(route('user_school'), ['school_id' => $school_id]);
        $response->assertStatus(302);
        // check current is account view
        $response->assertRedirect(route('account'));
    }
}
