<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;

class LinkRepositoryController extends Controller
{
    //
    public function index($area)
    {
        $areas = [  'ing' => '1%',  'bio' => '2%',  'soc' => '3%'   ];
        $area_id = $areas[$area];

        $schools = School::where('id', 'LIKE', $area_id)
            ->orderBy('id')
            ->get();
        return view('link_repository')->with('schools', $schools);
    }
}