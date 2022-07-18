<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LinkRepositoryController as LinkRepository_;
use App\Http\Controllers\SchoolController as School_;
use App\Http\Controllers\HomeController as Home_;
use App\Http\Controllers\AccountController as Account_;

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

// special views
Route::view('/', 'welcome')->name('welcome');

Route::get('/account', [App\Http\Controllers\AccountController::class, 'index'])->middleware('auth')->name('account');
Route::post('/account', [App\Http\Controllers\AccountController::class, 'userSchool'])->name('user_school');

Route::view('services', 'services');

Route::view('support', 'support');

Route::view('about', 'about');

// services routes
Route::view('/services/link_repository', 'link_repository');
Route::get('/services/link_repository/{area}', [LinkRepository_::class, 'index'])->name('link_repository');
Route::get('/services/link_repository/school/{school_id}', [School_::class, 'index'])->name('school');
Route::get('/services/link_repository/school/{school_id}/add_link', [School_::class, 'addLinkView'])->middleware('auth')->name('add_link');
Route::post('/services/link_repository/school/add_link', [School_::class, 'addLink'])->name('add_link');


//  auth routes
require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
