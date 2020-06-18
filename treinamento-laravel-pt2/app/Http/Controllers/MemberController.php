<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index(){
        return view('members.index');
    }

    public function create(){
        return view('members.create');
    }

    public function edit($id){
        return view('members.edit');
    }

    public function store(Request $request){
    
    }

    public function update(Request $request, $id){
    
    }

    public function destroy($id){
    
    }
}
