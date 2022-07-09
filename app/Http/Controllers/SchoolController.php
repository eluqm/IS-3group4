<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\School;
use App\Models\Link;
use App\Models\UserSchool;

class SchoolController extends Controller
{
    //
    public function index($school_id)
    {
        $school = School::find($school_id);
        $links = Link::where('school_id', $school_id)
            ->orderBy('id')
            ->get();
        $is_my_school = false;

        $user_schools = UserSchool::where('user_id', auth()->user()->id)->get();
        if (count($user_schools) > 0) {
            foreach ($user_schools as $user_school) {
                if ($user_school->school_id == $school_id) {
                    $is_my_school = true;
                }
            }
        }
        // return view('school')->with('school', $school)->with('links', $links);
        return view('school', compact('school', 'links', 'is_my_school'));
    }

    public function addLink(Request $request)
    {
        $validated = $request->validate([
            'link_url' => 'required|url'
        ]);

        $user = auth()->user();
        $link = new Link;
        $link->name = $request->input('link_name');
        $link->description = $request->input('link_description');
        $link->url = $request->input('link_url');
        $link->school_id = $request->input('school_id');
        $link->made_by = $user->id;
        $link->save();

        return redirect()->back()->with('success', 'Enlace registrado correctamente');
    }
}