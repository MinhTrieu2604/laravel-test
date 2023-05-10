<?php

use App\Models\ClassModel;
use App\Models\StudentModel;
use App\Models\TeacherModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/classes', function() {
    return ClassModel::all();
});

Route::get('/students', function() {
    return StudentModel::all();
});

Route::get('/teachers', function() {
    return TeacherModel::all();
});

