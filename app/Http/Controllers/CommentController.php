<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Comment;

class CommentController extends Controller
{
    //
    public function index($teacher_id)
    {
        $teacher = Teacher::find($teacher_id);
        if (!$teacher) {
            return redirect()->back()->with('error', 'Docente no encontrado');
        }
        
        // array of adjectives to use for the teacher
        $adjectives = [
            'Puntual',
            'Comprensivo',
            'Responsable',
            'Eficaz',
            'Estricto',
            'Flexible',
            'Organizado',
        ];            

        return view('add_comment', compact('teacher', 'adjectives'));
    }

    public function add_comment(Request $request)
    {
        $this->validate($request, [
            'teacher_id' => 'required|exists:teachers,id',
            'comment' => 'required',
            'rating' => 'required|integer|between:1,5',
            'adjective' => 'required|string|max:20',
        ]);

        $comment = new Comment();
        $comment->comment = $request->input('comment');
        $comment->teacher_id = $request->input('teacher_id');
        $comment->rating = $request->input('rating');
        $comment->adjective = $request->input('adjective');
        $comment->made_by = auth()->user()->id;
        $comment->save();

        // update the teacher's rating
        // get total of comments
        $total_comments = Comment::where('teacher_id', $request->input('teacher_id'))->count();
        $teacher = Teacher::find($request->input('teacher_id'));
        $teacher->rating = $teacher->rating + ( $request->input('rating') - $teacher->rating) / $total_comments;

        // update the teacher's adjectives with the most voted adjective
        $adjectives = Comment::select('adjective', DB::raw('count(*) as total'))
            ->where('teacher_id', $request->input('teacher_id'))
            ->groupBy('adjective')->orderBy('total', 'desc')->first();

        $teacher->adjective = $adjectives->adjective;
        $teacher->save();

        return back()->with('success', 'Comentario agregado exitosamente');
    }
}