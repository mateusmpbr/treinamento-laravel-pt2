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

    public function edit(){
        return view('members.edit');
    }
}
