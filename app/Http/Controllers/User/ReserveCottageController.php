<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cottages;
use App\Models\User;
use App\Models\Reserve;
use Auth;
use DB;

class ReserveCottageController extends Controller
{
    //
     public function index( $id)
    {
        // $cottages = cottages::where('id', $id)->first();
            $cottages = DB::table('cottages')->where('id', $id)->first();
       return view('usersection.reservecottage', compact('cottages'));

    }

    public function saveCottagesReserve(Request $request){

      $request->validate([
              'date'=> 'required|date|after:today',
              'enddate'=>'required|date|after:start_date',
              'mobilenumber'=>'required|min:11|max:11',
              'note'=>'required',
              'address'=>'required'
          ]);

            $reserve = new Reserve;
 			$reserve->user_id = Auth::User()->id;
            $reserve->cottage_id = $request->cottage_id;
 			$reserve->amount = $request->price;
            $reserve->reserve_date = $request['date'];
             $reserve->end_date = $request['enddate'];
            $reserve->address = $request['address'];
            $reserve->mobilenumber = $request['mobilenumber'];
            $reserve->note = $request['note'];
            $reserve->status = "New";
            $reserve->Save();

        return back()->with('cottages_update','Reserve Save Succesfully');

        }


}
