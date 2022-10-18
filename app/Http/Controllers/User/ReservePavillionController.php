<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pavillionhall;
use App\Models\User;
use App\Models\ReservePavillion;
use Auth;
use DB;

class ReservePavillionController extends Controller
{
    //
        public function index( $id)
    {
        // $cottages = cottages::where('id', $id)->first();
            $pavillionhalls = DB::table('pavillionhalls')->where('id', $id)->first();
        $user_id = Auth::id();
        $user = DB::table('users')->where('id',$user_id)->first();
       return view('usersection.reservepavillionhalls', compact('pavillionhalls','user'));

    }

     public function savePavillion(Request $request){

         $request->validate([
             'date'=> 'required|after:today',
             'enddate'=>'required|after:date',
             'mobilenumber'=>'required|digits:11',
             'note'=>'required',
             'address'=>'required'
         ]);
            $reserve = new ReservePavillion;
            $reserve->user_id = Auth::User()->id;
            $reserve->amount = $request->price;
            $reserve->pavillionhalls_id = $request->pavillionhalls_id;
            $reserve->reserve_date = $request['date'];
            $reserve->end_date = $request['enddate'];
            $reserve->status = "New";
            $reserve->address = $request['address'];
            $reserve->mobilenumber = $request['mobilenumber'];
            $reserve->note = $request['note'];
            $reserve->Save();

        return back()->with('success','Reserve Save Succesfully');

        }
}
