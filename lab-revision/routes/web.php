<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

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

// Route::get('/', function () {
//     return view('project.index');
// });
Route::get('/', [ProjectController::class, 'index'])->name('projects.index'); 
Route::get('/add', function () {
    return view('project.add'); // Return the view for the add project page
})->name('projects.create');
Route::get('/edit', function () {
    return view('project.edit'); // Return the view for the add project page
})->name('projects.edit');
Route::post('/add', [ProjectController::class, 'store'])->name('projects.store');
Route::get('/delete/{id}', [ProjectController::class, 'delete'])->name('projects.delete');