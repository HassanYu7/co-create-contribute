<?php

use App\Models\Project;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Services\ProjectService;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $projects = Project::all();

    return view('welcome')->with('projects', $projects);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create')->middleware('auth');
Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store')->middleware('auth');