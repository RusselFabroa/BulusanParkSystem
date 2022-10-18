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
        $user_id = Auth::id();
        $user = DB::table('users')->where('id',$user_id)->first();
       return view('usersection.reservetreehouse', compact('treehouse','user'));

    }

      public function saveTreehousesReserve(Request $request){

          $request->validate([
              'date'=> 'required|after:today',
              'enddate'=>'required|after:date',
              'mobilenumber'=>'required|digits:11',
              'note'=>'required',
              'address'=>'required'
          ]);

            $reserve = new ReserveTreehouse;
 			    $reserve->user_id = Auth::User()->id;
           $reserve->amount = $request->price;
 			      $reserve->treehouse_id = $request->treehouse_id;
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
