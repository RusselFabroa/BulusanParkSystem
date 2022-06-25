<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\functionhall;
use App\Models\User;
use App\Models\ReserveFunctionHall;
use Auth;
use DB;

class ReserveFunctionHallController extends Controller
{
    //
      public function index( $id)
    {
        // $cottages = cottages::where('id', $id)->first();
            $functionhalls = DB::table('functionhalls')->where('id', $id)->first();
       return view('usersection.reservefunctionhalls', compact('functionhalls'));

    }

       public function saveFunctionHallReserve(Request $request){

            $reserve = new ReserveFunctionHall;
            $reserve->user_id = Auth::User()->id;
           $reserve->amount = $request->price;
           $reserve->functionhalls_id = $request->functionhalls_id;
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
