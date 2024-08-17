<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\StudentController;

Route::get('/', [HomeController::class, 'home']);
Route::get('/form', [FormController::class, 'form']);
Route::post('/create-user', [FormController::class, 'crateUser'])->name('createUser');

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/add-student', [StudentController::class, 'studentForm']);
Route::get('/edit-student/{id}', [StudentController::class, 'studentEdit'])->name('student.edit');
Route::get('/all-student', [StudentController::class, 'allStudent'])->name('student.list');
Route::post('/student-store', [StudentController::class, 'studentCreate'])->name('student.store');
Route::post('/student-update', [StudentController::class, 'studentUpdate'])->name('student.update');



