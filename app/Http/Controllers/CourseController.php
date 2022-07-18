<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Course;
use App\Models\Resource;

class CourseController extends Controller
{
    //
    public function index($id)
    {
        $course = Course::where('id', $id)->get()->first();
        $origin = 'Recursos de ' . Course::find($id)->name;
        $resources = Resource::where('course_id', $id)->get();
        
        $is_my_course = false;
        if (auth()->check())
        {
            // verify if the course belongs to my school
            $my_school = DB::table('course_school')
                ->join('schools', 'schools.id', '=', 'course_school.school_id')
                ->join('user_school', 'user_school.school_id', '=', 'schools.id')
                ->where('course_school.course_id', $id)
                ->where('user_school.user_id', auth()->user()->id);
            if ($my_school->count() > 0) 
            {
                $is_my_course = true;
            }
        }

        return view('course', compact('course', 'origin', 'resources', 'is_my_course'));
    }

    public function resource($id)
    {
        $course = Course::where('id', $id)->get()->first();
        $origin = 'Recursos de ' . Course::find($id)->name;
        return view('add_resource', compact('course', 'origin'));
    }

    public function add_resource(Request $request)
    {
        $resource = new Resource;
        $resource->description = $request->input('description');
        $resource->course_id = $request->input('course_id');
        $resource->url = $request->input('url');
        $resource->made_by = auth()->user()->id;
        $resource->save();
        return redirect()->back()->with('success', 'Recurso agregado exitosamente');
    }
}
