<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;


Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('home');;

    Route::resource('countries', CountryController::class);
    Route::resource('cities', CityController::class);
    Route::resource('colleges', CollegeController::class);
    Route::resource('grades', GradeController::class);
    Route::resource('programs', ProgramController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('students', StudentController::class);
    Route::resource('subjects', SubjectController::class);
    Route::resource('teachers', TeacherController::class);
    Route::resource('users', UserController::class);
});
require __DIR__.'/auth.php';