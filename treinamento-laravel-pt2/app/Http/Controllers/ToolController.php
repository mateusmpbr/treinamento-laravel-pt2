<?php

namespace App\Http\Controllers;

use App\Tool;
use Illuminate\Http\Request;

class ToolController extends Controller
{
    public function index(){
        return view('tools.index');
    }

    public function create(){
        return view('tools.create');
    }

    public function edit(){
        return view('tools.edit');
    }
}
