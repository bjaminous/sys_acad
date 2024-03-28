<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcademicController;





Route::get('/',[AcademicController::class,'index']);
Route::get('/sign-in',[AcademicController::class,'signin'])->name('sign');

Route::post('/sign-in',[AcademicController::class,'login'])->name('login');
//Route::get('/home',[AcademicController::class,'index2']); except('show', 'edit), ->only()

Route::get('/dash',[AcademicController::class,'dash']);
Route::get('/course_registration',[AcademicController::class,'registration'])->name('registration');
Route::post('/regiser_course',[AcademicController::class,'register'])->name('register');

