<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get("/students", [StudentController::class, "index"])->name("students.index");
// Route::get("/students/create", [StudentController::class, "create"])->name("students.create");
// Route::post("/students", [StudentController::class, "store"])->name("students.store");
// Route::get("/students/{id}/edit", [StudentController::class, "edit"])->name("students.edit");
// Route::put("/students/{id}", [StudentController::class, "update"])->name("students.update");
// Route::delete("/students/{id}", [StudentController::class, "destroy"])->name("students.destroy");

Route::resource('students', StudentController::class)->middleware('auth');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
