<?php

use App\Models\Project;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\VisitorProjectController;
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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//  ============================ Project routes for Dashboard ============================

Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create')->middleware('auth');
Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store')->middleware('auth');
Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit');

Route::put('/projects/{project}/update', [ProjectController::class, 'update'])->name('projects.update')->middleware('auth');



// Route::get('/projects/{id}/edit', [ProjectController::class, 'edit'])->name('projects.edit')->middleware('auth');
// Route::put('/projects/{id}', [ProjectController::class, 'update'])->name('projects.update')->middleware('auth');



//  ============================ Project routes for Visitors ============================

Route::get('/', [VisitorProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/{id}', [VisitorProjectController::class, 'show'])->name('projects.show');
