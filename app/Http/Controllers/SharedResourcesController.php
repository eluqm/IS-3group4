<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Resource;
use App\Models\Course;
use App\Models\CourseSchool;
use App\Models\School;

class SharedResourcesController extends Controller
{
    //
    public function index()
    {
        $courses = Course::all();
        $schools = School::all();
        
        return view('shared_resources', compact('courses', 'schools'));
    }
    public function by_school(Request $request)
    {
        $school_id = $request->input('school');
        $school = School::where('id', $school_id)->get()->first();
        $courses = DB::table('courses')
            ->join('course_school', 'courses.id', '=', 'course_school.course_id')
            ->select('courses.*')
            ->where('course_school.school_id', $school_id)
            ->orderBy('courses.name', 'asc')
            ->get();

        $origin = $school->name;
        return view('shared_resources', compact('courses', 'school', 'origin'));
    }
}
