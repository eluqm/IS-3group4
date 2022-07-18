<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $origin = 'Todos los cursos';
        return view('shared_resources', compact('courses', 'origin'));
    }
}