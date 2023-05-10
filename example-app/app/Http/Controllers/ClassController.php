<?php

namespace App\Http\Controllers;

use App\Models\ClassModel;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    function GetAllClassAPI () {
        return ClassModel::all(['id','name','teacher_id']);
    }

    function GetClassByIdAPI (Request $request) {
        return ClassModel::where('id',$request -> id)->first(['id','name','teacher_id']);
    }

    function GetClassByNameAPI (Request $request) {
        return ClassModel::where('name',$request -> name)->first(['id','name','teacher_id']);
    }

    function GetClassByTeacherIdAPI (Request $request) {
        return ClassModel::where('teacher_id',$request -> teacher_id)->first(['id','name','teacher_id']);
    }
}
