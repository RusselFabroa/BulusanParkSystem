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

        //pag-save ng image sa local storage
            // $cottages = DB::table('cottages')->where('id', $id)->first();
      // dd($productdata);
            $reserve = new Reserve;
 			$reserve->user_id = Auth::User()->id;
            $reserve->cottage_id = $request->cottage_id;
 			$reserve->amount = $request->price;
            $reserve->reserve_date = $request['date'];  
            $reserve->address = $request['address'];  
            $reserve->mobilenumber = $request['mobilenumber'];  
            $reserve->note = $request['note'];	
            $reserve->status = "New";
            $reserve->Save();

        return back()->with('cottages_update','Reserve Save Succesfully');

        }
  
  
}
