<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\User;
use App\Models\Teacher;

class CommentControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_comment_does_not_display_add_comment_view_to_guests()
    {
        $teacher_id = rand(1, 100);

        $response = $this->get('/services/teacher_records/add_comment/' . $teacher_id);
        
        $response->assertRedirect('/login');
    }

    public function test_comment_displays_add_comment_view_to_users()
    {
        // first login
        $user = User::factory()->make();
        $this->actingAs($user);
        // create a teacher
        $teacher = Teacher::factory()->make();
        $teacher->save();
        $teacher_id = $teacher->id;

        $response = $this->get('/services/teacher_records/add_comment/' . $teacher_id);

        $response->assertStatus(200);
        $response->assertViewIs('add_comment');
    }

    public function test_save_comment_works()
    {
        // first login
        $user = User::factory()->make();
        $this->actingAs($user);
        // create a teacher
        $teacher = Teacher::factory()->make();
        $teacher->save();
        $teacher_id = $teacher->id;
        
        $this->get('/services/teacher_records/add_comment/' . $teacher_id);
        $response = $this->post('/services/teacher_records/add_comment/', [
            'teacher_id' => $teacher_id,
            'comment' => 'This is a comment',
            'rating' => '5',
            'adjective' => 'Puntual',
        ]);

        $response->assertStatus(302);
        // check current is teacher records
        $response->assertRedirect('/services/teacher_records/add_comment/' . $teacher_id);
    }
}
