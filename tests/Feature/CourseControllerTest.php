<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\User;
use App\Models\Course;
use App\Models\Resource;

class CourseControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_course_displays_course_view()
    {
        // create a course
        $course = Course::factory()->make();
        $id = $course->id;
        $course->save();
        
        $response = $this->get('/services/shared_resources/course/' . $id);

        $response->assertStatus(200);
    }

    public function test_course_does_not_display_user_course_view_to_guests()
    {
        // create a course
        $course = Course::factory()->make();
        $id = $course->id;
        $course->save();
        
        $response = $this->get('/services/shared_resources/course/' . $id);

        $response->assertViewHas('is_my_course', false);
        $response->assertStatus(200);
    }

    public function test_course_does_not_display_add_comment_view_to_guests()
    {
        $course_id = rand(1, 100);

        $response = $this->get('/services/shared_resources/add_resource/' . $course_id);
        
        $response->assertRedirect('/login');
    }

    public function displays_add_ressource_view_to_users()
    {
        // create a course
        $course = Course::factory()->make();
        $id = $course->id;
        $course->save();
        // create a resource
        $resource = Resource::factory()->make();
        $resource->course_id = $id;
        $resource->save();
        
        $response = $this->get('/services/shared_resources/add_resource/' . $id);

        $response->assertStatus(302);
        $response->assertRedirect('/services/shared_resources/add_resource/' . $id);
    }

    public function test_save_resource_works()
    {
        //first login
        $user = User::factory()->make();
        $this->actingAs($user);
        // create a course
        $course = Course::factory()->make();
        $id = $course->id;
        $course->save();
        // create a resource
        $resource = Resource::factory()->make();
        $resource->course_id = $id;
        $resource->save();
        
        $this->get('/services/shared_resources/add_resource/' . $id);
        $response = $this->post('/services/shared_resources/add_resource/', [
            'description' => 'This is a description',
            'course_id' => $id,
            'url' => 'https://www.google.com',
        ]);

        $response->assertStatus(302);
        // check current is shared resources
        $response->assertRedirect('/services/shared_resources/add_resource/' . $id);
    }

}
