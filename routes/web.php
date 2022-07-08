<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController as Home_;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::view('/services/link_repository', 'link_repository');

Route::get('/services/link_repository/{area}', function ($area) {
    $areas = [  'ing' => '1%',  'bio' => '2%',  'soc' => '3%'   ];
    $area_id = $areas[$area];

    $schools = App\Models\School::where('id', 'LIKE', $area_id)
        ->orderBy('id')
        ->get();
    return view('link_repository')->with('school', $school);
});

Route::get('/services/link_repository/school/{school_id}', function ($school_id) {
    $school = App\Models\School::find($school_id);
    $links = App\Models\Link::where('school_id', $school_id)
        ->orderBy('id')
        ->get();
    return view('school')->with('school', $school)->with('links', $links);
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
