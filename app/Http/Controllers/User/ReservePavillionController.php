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
       return view('usersection.reservepavillionhalls', compact('pavillionhalls'));

    }

     public function savePavillion(Request $request){

            $reserve = new ReservePavillion;
 			    $reserve->user_id = Auth::User()->id;
           $reserve->amount = $request->price;
 			      $reserve->pavillionhalls_id = $request->pavillionhalls_id;
            $reserve->reserve_date = $request['date'];	
            $reserve->status = "New";
              $reserve->address = $request['address'];  
            $reserve->mobilenumber = $request['mobilenumber'];  
            $reserve->note = $request['note'];  
            $reserve->Save();

        return back()->with('cottages_update','Reserve Save Succesfully');

        }
}
