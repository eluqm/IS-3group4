<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        return view('course', compact('course', 'origin', 'resources'));
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