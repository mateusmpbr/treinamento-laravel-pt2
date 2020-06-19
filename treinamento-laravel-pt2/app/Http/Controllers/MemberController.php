<?php

namespace App\Http\Controllers;

use App\Member;
use App\Department;
use App\Tool;
use App\MembersHasTools;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MemberController extends Controller
{
    public function index(){
        $departments = Department::all();
        $members = Member::all();
        return view('members.index', compact('members', 'departments'));
    }

    public function create(){
        $departments = Department::all();
        $tools = Tool::all();
        return view('members.create', compact('departments','tools'));
    }

    public function edit($id){
        $departments = Department::all();
        $tools = Tool::all();
        $member = Member::find($id);
        return view('members.edit', compact('departments','tools','member'));
    }

    public function store(Request $request){
        $member = new Member;
        
        $member->fill([
            'department_id' => $request->department_id,
            'name' => $request->name,
            'email' => $request->email,
            'status' => $request->status,
            'role' => $request->role
        ]);

        if ($request->phone){
            $member->phone = $request->phone;
        }

        if ($request->hasFile('photo')) {
            if($request->file('photo')->isValid()){
                $photo_path = $request->photo->store('images', 'public');
                $member->photo = $photo_path;
            }
        }

        $member->save();

        if($request->tools){
            foreach($request->tools as $tool){
                MembersHasTools::create([
                    'members_id' => $member->id,
                    'tools_id' => $tool
                ]);
            }
        }

        return redirect('/members');
    }

    public function update(Request $request, $id){
        $member = Member::find($id);
        
        $member->fill([
            'department_id' => $request->department_id,
            'name' => $request->name,
            'email' => $request->email,
            'status' => $request->status,
            'role' => $request->role
        ]);

        if ($request->phone){
            $member->phone = $request->phone;
        }else{
            $member->phone = NULL;
        }

        if ($request->hasFile('photo')) {
            if($request->file('photo')->isValid()){
                Storage::disk('public')->delete($member->photo);
                $photo_path = $request->photo->store('images', 'public');
                $member->photo = $photo_path;
            }
        }

        $member->save();

        if($request->tools){
            MembersHasTools::where('members_id', $id)->delete();
            foreach($request->tools as $tool){
                MembersHasTools::create([
                    'members_id' => $member->id,
                    'tools_id' => $tool
                ]);
            }
        }

        return redirect('/members');
    }

    public function destroy($id){
        $member = Member::findOrFail($id);
        Storage::disk('public')->delete($member->photo);
        $member->delete();
        return redirect('/members');
    }

    public function filter(Request $request){
        $members = Member::where('status', $request->status)
                            ->where('department_id', $request->department_id)
                            ->get();
        $departments = Department::all();
        return view('members.index', compact('members', 'departments'));
    }
}
