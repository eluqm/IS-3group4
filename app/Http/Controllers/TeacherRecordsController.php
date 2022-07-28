<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Comment;

class TeacherRecordsController extends Controller
{
    //
    public function index()
    {
        $teachers = Teacher::all();

        // make an array of all the teachers with their respective comments
        $data = [];
        foreach ($teachers as $teacher) {
            $teacher_comments = Comment::where('teacher_id', $teacher->id)->get();
            // split by commas
            $teacher->adjectives = explode(',', $teacher->adjectives);
            $data[] = [
                'teacher' => $teacher,
                'comments' => $teacher_comments
            ];
        }

        return view('teacher_records', compact('data'));
    }

    public function add_teacher(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
        ]);

        $teacher = new Teacher();
        $teacher->first_name = $request->input('first_name');
        $teacher->last_name = $request->input('last_name');
        $teacher->rating = 0;
        $teacher->adjective = "";
        $teacher->save();

        return redirect()->back()->with('success', 'Docente agregado exitosamente');
    }
}