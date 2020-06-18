<?php

namespace App\Http\Controllers;

use App\Tool;
use Illuminate\Http\Request;

class ToolController extends Controller
{
    public function index(){
        $tools = Tool::all();
        return view('tools.index', compact('tools'));
    }

    public function create(){
        return view('tools.create');
    }

    public function edit($id){
        $tool = Tool::where('id', $id)->first();
        return view('tools.edit', compact('tool'));
    }

    public function store(Request $request){
        Tool::create($request->all());
        return redirect('/tools');
    }

    public function update(Request $request, $id){
        $tool = Tool::find($id);
        $tool->fill($request->all());
        $tool->save();
        return redirect('/tools');
    }

    public function destroy($id){
        $tool = Tool::findOrFail($id);
        $tool->delete();
        return redirect('/tools');
    }
}
