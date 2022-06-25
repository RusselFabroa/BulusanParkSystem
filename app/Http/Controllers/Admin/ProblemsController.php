<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\functionhall;
use App\Models\problem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProblemsController extends Controller
{
    public function listproblem(){
        $problems = DB::table('problems')
            ->where('status','=','unresolved')
            ->get();

        return view('adminsection.problem-list', compact('problems'));
    }
    public function listresolved(){
        $problems = DB::table('problems')
            ->where('status','=','resolved')
            ->get();

        return view('adminsection.problem-list-resolved', compact('problems'));
    }


    public function updateproblem($id, Request $request){
        $problems = problem::find($id);
        $problems->users_name = $request->input('users_name');
        $problems->users_number = $request->input('users_number');
        $problems->problem = $request->input('problem');
        $problems->note = $request->input('note');
        $problems->status = $request->input('status');
        $problems->update();

        return back()->with('success','Updated Successfully');
    }

    public function deleteproblem($id, Request $request){
        $problems = problem::find($id);
        $problems->delete();

        return back()->with('info', 'Deleted Successfully!');
    }
}
