<?php

namespace App\Http\Controllers;

use App\Models\ClassModel;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    function GetAllClassAPI (Request $request) {
        return ClassModel::all();
    }

    function GetClassByIdAPI (Request $request) {
        return ClassModel::where('id',$request -> id)->first(['id','name']);
    }
}
