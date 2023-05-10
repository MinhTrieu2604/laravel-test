<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\StudentModel;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function GetAllStudentAPI () {
        return StudentModel::all(['id','name']);
    }

    function GetStudentByIdAPI (Request $request) {
        return StudentModel::where('id',$request -> id)->first(['id','name']);
    }

    function GetStudentByNameAPI (Request $request) {
        return StudentModel::where('name',$request -> name)->first(['id','name']);
    }
}
