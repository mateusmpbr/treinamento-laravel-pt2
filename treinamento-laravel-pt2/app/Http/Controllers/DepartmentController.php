<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index(){
        $departments = Department::all();
        return view('departments.index', compact('departments'));
    }

    public function create(){
        return view('departments.create');
    }

    public function edit($id){
        $department = Department::where('id', $id)->first();
        return view('departments.edit', compact('department'));
    }

    public function store(Request $request){
        Department::create($request->all());
        return redirect('/departments');
    }

    public function update(Request $request, $id){
        $department = Department::find($id);
        $department->fill($request->all());
        $department->save();
        return redirect('/departments');
    }

    public function destroy($id){
        $department = Department::findOrFail($id);
        $department->delete();
        return redirect('/departments');
    }
}
