<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\School;
use App\Models\UserSchool;

class AccountController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();

        $user_attributes[] = (object) [ 'name' => 'Nombres', 'value' => $user->first_name ];
        $user_attributes[] = (object) [ 'name' => 'Apellidos', 'value' => $user->last_name ];
        $user_attributes[] = (object) [ 'name' => 'Correo vinculado', 'value' => $user->email ];
        $user_attributes[] = (object) [ 'name' => 'Fecha y Hora de Creación', 'value' => $user->created_at ];

        $has_school = false;
        $schools = [];

        $user_schools = UserSchool::where('user_id', $user->id)->get();

        // if the user has at least one school linked
        if (count($user_schools) > 0) 
        {
            $has_school = true;
            foreach ($user_schools as $user_school) {
                $schools[] = School::find($user_school->school_id);
            }
            $my_schools = $schools[0]->name;
            // loop over the rest of the schools
            for ($i = 1; $i < count($schools); $i++) {
                $my_schools .= ', ' . $schools[$i]->name;
            }

            $user_attributes[] = (object) [ 'name' => 'Escuela Profesional', 'value' => $my_schools ];
        }
        else
        {
            $user_attributes[] = (object) [ 'name' => 'Escuela Profesional', 'value' => "Aún no se ha registrado a ninguna escuela " ];
            $schools = School::all();
        }

        $user_types = [ 0 => 'Estudiante', 1 => 'Docente', 2 => 'Moderador', 3 => 'Administrador' ];
        $user_type = $user_types[$user->user_type];

        $user_attributes[] = (object) [ 'name' => 'Tipo de Cuenta', 'value' => $user_type ];

        return view('account', compact('user_attributes', 'has_school', 'schools'));
    }
    // Action AccountController@userSchool (POST)


    public function userSchool(Request $request)
    {
        $user = auth()->user();
        $user_school = new UserSchool;
        $user_school->user_id = $user->id;
        $user_school->school_id = $request->input('school_id'); 
        $user_school->save();
        return redirect('/account');
    }
}