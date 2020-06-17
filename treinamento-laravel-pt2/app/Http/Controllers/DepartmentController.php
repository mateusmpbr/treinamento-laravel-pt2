<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index(){
        return view('departments.index');
    }

    public function create(){
        return view('departments.create');
    }

    public function edit(){
        return view('departments.edit');
    }
}
