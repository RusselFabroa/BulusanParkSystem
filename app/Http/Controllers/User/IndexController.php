<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\User;
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
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    //
     public function dashboard(Request $request)
    {
        $id = Auth::id();
       /* $data = DB::table('reserves')
            ->where('status','=','Accept')
            ->where('user_id','=',$id)
            ->get();*/

        $data = DB::table('users')
            ->join('reserves','reserves.user_id','=','users.id')
            ->join('cottages', 'cottages.id','=','reserves.cottage_id')
            ->where('users.id','=',$id)
            ->where('reserves.status','=','Accept')
            ->get();

        $totalbill = DB::table('reserves')
            ->where('status','=','Accept')
            ->where('user_id','=',$id)
            ->sum('amount');


        $countreserved = DB::table('users')
            ->join('reserves','users.id','=','reserves.user_id')
            ->join('reservetreehouses','reserves.user_id','=','reservetreehouses.user_id')
            ->join('reservefunctionhall','reservetreehouses.user_id','=','reservefunctionhall.user_id')
            ->join('reservepavillion','reservefunctionhall.user_id','=','reservepavillion.user_id')
            ->where('users.id','=',Auth::User()->id)
            ->where('reserves.status','=','Accept')
            ->count();





        $cottages = cottages::where('availability','available')->limit(4)->get();
        $treehouse = treehouse::where('status','available')->limit(4)->get();
        $functionhall = functionhall::where('status','available')->limit(4)->get();
        $pavillionhall = pavillionhall::where('status','available')->limit(4)->get();
       return view('usersection.user-dashboard', compact('cottages', 'treehouse', 'functionhall', 'pavillionhall', 'data','totalbill','countreserved' ));

    }
    public function userlogout(){
        Auth()->logout();
        return redirect('/');
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

    public function historyreport(){

        $problems = DB::table('problems')->latest()->get();
//            ->where('status','=','unresolved')

         return view('usersection.history.historyreport', compact('problems'));
    }
}
