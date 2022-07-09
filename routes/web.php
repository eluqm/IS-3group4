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

Route::view('/', 'welcome')->name('welcome');


Route::view('/services/link_repository', 'link_repository');

Route::get('/services/link_repository/{area}', function ($area) {
    $areas = [  'ing' => '1%',  'bio' => '2%',  'soc' => '3%'   ];
    $area_id = $areas[$area];

    $schools = App\Models\School::where('id', 'LIKE', $area_id)
        ->orderBy('id')
        ->get();
    return view('link_repository')->with('schools', $schools);
});

Route::get('/services/link_repository/school/{school_id}', [App\Http\Controllers\SchoolController::class, 'index'])->name('school');
Route::post('/services/link_repository/school/add_link', [App\Http\Controllers\SchoolController::class, 'addLink'])->name('add_link');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
