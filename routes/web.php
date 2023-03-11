<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

//ROTTA HOMEPAGE
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
//ROTTA CONTATTACI
Route::get('/contattaci', [PublicController::class, 'contact_us'])->name('contact_us');
Route::post('/contattaci/submit', [PublicController::class, 'contact_us_submit'])->name('contact_us_submit');
Route::get('/contattaci/submit/successful', [PublicController::class, 'contact_us_successful'])->name('contact_us_successful');

//ROTTE ACADEMY & COURSES
Route::get('/academy/index', [CourseController::class, 'index'])->name('course.index');
Route::get('/academy/CourseCreate', [CourseController::class, 'create'])->name('course.create');
Route::post('/academy/CourseStore', [CourseController::class, 'store'])->name('course.store');
Route::get('academy/show/{course}', [CourseController::class, 'show'])->name('course.show');