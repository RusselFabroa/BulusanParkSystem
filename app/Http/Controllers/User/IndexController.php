<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cottages;
use App\Models\treehouse;
use App\Models\functionhall;
use App\Models\pavillionhall;
use App\Models\Reserve;
use App\Models\ReserveTreehouse;
use App\Models\ReserveFunctionHall;
use App\Models\ReservePavillion;

use Auth;

class IndexController extends Controller
{
    //
     public function dashboard(Request $request)
    {
        $cottages = cottages::where('availability','available')->limit(4)->get();
        $treehouse = treehouse::where('status','available')->limit(4)->get();
        $functionhall = functionhall::where('status','available')->limit(4)->get();
        $pavillionhall = pavillionhall::where('status','available')->limit(4)->get();
       return view('usersection.user-dashboard', compact('cottages', 'treehouse', 'functionhall', 'pavillionhall'));

    }
    public function cottage(){
    	    $cottages = cottages::where('availability','available')->get();
       return view('usersection.facilities.cottage', compact('cottages'));

    }

      public function treehouse(){
    	    $treehouse = treehouse::where('status','available')->get();
       return view('usersection.facilities.treehouse', compact('treehouse'));

    }

      public function functionhall(){
    	    $functionhall = functionhall::where('status','available')->get();
       return view('usersection.facilities.functionhall', compact('functionhall'));

    }

      public function pavilionhall(){
    	    $pavillionhall = pavillionhall::where('status','available')->get();
       return view('usersection.facilities.pavillionhall', compact('pavillionhall'));

    }
      public function historyreserve(){
           $cottages = Reserve::with('cottage')->where('user_id',Auth::user()->id)->orderBy('id','Desc')->get()->toArray();
           // dd($cottages); die;
       return view('usersection.history.historyreserve', compact('cottages'));
    }

    public function orderDetails($id){
      $cottages = Reserve::with('cottage')->where('id', $id)->first()->toArray();
           // dd($cottages); die;
       return view('usersection.history.historyreservedetails', compact('cottages'));
    }
    
     public function historyreservetreehouse(){
           $cottages = ReserveTreehouse::with('treehouse')->where('user_id',Auth::user()->id)->orderBy('id','Desc')->get()->toArray();
           // dd($cottages); die;
       return view('usersection.history.historyreservetreehouse', compact('cottages'));

    }

    public function orderDetailsTreehouse($id){
      $cottages = ReserveTreehouse::with('treehouse')->where('id', $id)->first()->toArray();
           // dd($cottages); die;
       return view('usersection.history.historyreservedetailstreehouse', compact('cottages'));
    }
    

     public function historyreservefunctionhall(){
           $cottages = ReserveFunctionHall::with('functionhall')->where('user_id',Auth::user()->id)->orderBy('id','Desc')->get()->toArray();
           // dd($cottages); die;
       return view('usersection.history.historyreservefunctionhall', compact('cottages'));

    }

    public function orderDetailsFunctionhall($id){
      $cottages = ReserveFunctionHall::with('functionhall')->where('id', $id)->first()->toArray();
           // dd($cottages); die;
       return view('usersection.history.historyreservedetailsfunctionhall', compact('cottages'));
    }

     public function historyreservepavillionhall(){
           $cottages = ReservePavillion::with('pavillionhall')->where('user_id',Auth::user()->id)->orderBy('id','Desc')->get()->toArray();
           // dd($cottages); die;
       return view('usersection.history.historyreservepavillionhall', compact('cottages'));

    }

    public function orderDetailsPavillionhall($id){
      $cottages = ReservePavillion::with('pavillionhall')->where('id', $id)->first()->toArray();
           // dd($cottages); die;
       return view('usersection.history.historyreservedetailspavillionhall', compact('cottages'));
    }

}
