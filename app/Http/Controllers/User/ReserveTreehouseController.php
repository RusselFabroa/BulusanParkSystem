<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\treehouse;
use App\Models\User;
use App\Models\ReserveTreehouse;
use Auth;
use DB;
class ReserveTreehouseController extends Controller
{
    //
     public function index( $id)
    {
        // $cottages = cottages::where('id', $id)->first();
            $treehouse = DB::table('treehouse')->where('id', $id)->first();
       return view('usersection.reservetreehouse', compact('treehouse'));

    }

      public function saveTreehousesReserve(Request $request){

        //pag-save ng image sa local storage
            // $cottages = DB::table('cottages')->where('id', $id)->first();
      // dd($productdata);
            $reserve = new ReserveTreehouse;
 			    $reserve->user_id = Auth::User()->id;
           $reserve->amount = $request->price;
 			      $reserve->treehouse_id = $request->treehouse_id;
            $reserve->reserve_date = $request['date'];	
            $reserve->status = "New";
              $reserve->address = $request['address'];  
            $reserve->mobilenumber = $request['mobilenumber'];  
            $reserve->note = $request['note'];  
            $reserve->Save();

        return back()->with('cottages_update','Reserve Save Succesfully');

        }
  
}
