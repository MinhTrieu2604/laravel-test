<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentController;
use App\Models\TeacherModel;
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

Route::get('/classes', [ClassController::class, 'GetAllClassAPI' ]);
Route::get('/classes/{id}', [ClassController::class, 'GetClassByIdAPI' ]);
Route::get('/classes/name/{name}', [ClassController::class, 'GetClassByNameAPI' ]);
Route::get('/classes/teacher_id/{teacher_id}', [ClassController::class, 'GetClassByTeacherIdAPI' ]);

Route::get('/students', [StudentController::class, 'GetAllStudentAPI' ]);
Route::get('/students/{id}', [StudentController::class, 'GetStudentByIdAPI' ]);
Route::get('/students/name/{name}', [StudentController::class, 'GetStudentByNameAPI' ]);

Route::get('/teachers', function() {
    return TeacherModel::all();
});

