<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Models\problem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ProblemController extends Controller
{
    public function saveProblem(Request $request){

//        $request -> validate([
//            'number' => 'required',
//            'problem'=>'required',
//            'note'=>'required'
//        ]);



        $problems = new problem();
        $problems->users_id = Auth::User()->id;
        $problems->users_name = Auth::User()->name;
        $problems->users_number = $request['mobilenumber'];
        $problems->problem = $request['problem'];
        $problems->note = $request['note'];
        $problems->status = "unresolved";

        if($request->file('image')){
            $file = $request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/problems/',$filename);
            $problems->image = $filename;
        }

        $problems->save();

        return Redirect::back()->with('success','Problem Reported Successfully!');


    }
}
