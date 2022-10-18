<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Review;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
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
        $auth_info= DB::table('users')
            ->where('id','=', $id)
            ->get();
        $currentTime = Carbon::now();
        $user_booked = DB::table('books')->where('user_id','=',$id)->where('status','=','booked')->get();
        $reservedcottage = DB::table('users')
            ->join('reserves','reserves.user_id','=','users.id')
            ->join('cottages', 'cottages.id','=','reserves.cottage_id')
            ->where('users.id','=',$id)
            ->where('reserves.status','=','Accepted')
            ->where('reserve_date','>',$currentTime)
            ->get();
        $reservedtreehouse = DB::table('users')
            ->join('reservetreehouses','reservetreehouses.user_id','=','users.id')
            ->join('treehouse', 'treehouse.id','=','reservetreehouses.treehouse_id')
            ->where('users.id','=',$id)
            ->where('reservetreehouses.status','=','Accepted')
            ->where('reserve_date','>',$currentTime)
            ->get();
        $reservedpavillion = DB::table('users')
            ->join('reservepavillion','reservepavillion.user_id','=','users.id')
            ->join('pavillionhalls', 'pavillionhalls.id','=','reservepavillion.pavillionhalls_id')
            ->where('users.id','=',$id)
            ->where('reservepavillion.status','=','Accepted')
            ->where('reserve_date','>',$currentTime)
            ->get();
        $reservedfunction = DB::table('users')
            ->join('reservefunctionhall','reservefunctionhall.user_id','=','users.id')
            ->join('functionhalls', 'functionhalls.id','=','reservefunctionhall.functionhalls_id')
            ->where('users.id','=',$id)
            ->where('reservefunctionhall.status','=','Accepted')
            ->where('reserve_date','>',$currentTime)
            ->get();


        $totalcotbill = DB::table('reserves')->where('status','=','Accepted')->where('reserve_date','>',$currentTime)->where('user_id','=',$id)->sum('amount');
        $totalpavbill = DB::table('reservepavillion')->where('status','=','Accepted')->where('reserve_date','>',$currentTime)->where('user_id','=',$id)->sum('amount');
        $totalfuncbill = DB::table('reservefunctionhall')->where('status','=','Accepted')->where('reserve_date','>',$currentTime)->where('user_id','=',$id)->sum('amount');
        $totaltrebill = DB::table('reservetreehouses')->where('status','=','Accepted')->where('reserve_date','>',$currentTime)->where('user_id','=',$id)->sum('amount');
        $totalfacilitiesbill = $totalcotbill+$totaltrebill+$totalfuncbill+$totalpavbill;
//countreserved

        $countreservedcottage = DB::table('reserves')->where('user_id','=',$id)->where('status','=','Accepted')->where('reserve_date','>',$currentTime)->count();
        $countreservedtreehouse = DB::table('reservetreehouses')->where('user_id','=',$id)->where('status','=','Accepted')->where('reserve_date','>',$currentTime)->count();
        $countreservedfunctionhall = DB::table('reservefunctionhall')->where('user_id','=',$id)->where('status','=','Accepted')->where('reserve_date','>',$currentTime)->count();
        $countreservedpavillion = DB::table('reservepavillion')->where('user_id','=',$id)->where('status','=','Accepted')->where('reserve_date','>',$currentTime)->count();
        $countreserved = $countreservedcottage+$countreservedtreehouse+$countreservedfunctionhall+$countreservedpavillion;

         $adult = DB::table('ticketprices')->select('price')->where('name','=','adult')->get();

        $cottages = cottages::where('availability','available')->get();
        $treehouse = treehouse::where('status','available')->get();
        $functionhall = functionhall::where('status','available')->get();
        $pavillionhall = pavillionhall::where('status','available')->get();

         $bookinfo = DB::table('books')->where('user_id','=',$id)
             ->where('book_date','>',$currentTime)
             ->where('status','=','booked')
             ->get();

         $parkinfo = DB::table('aboutus')->get();

         $adultprice = DB::table('ticketprices')->select('price')
             ->where('name','=','adult')->value('price');
         $childrenprice = DB::table('ticketprices')->select('price')
             ->where('name','=','children')->value('price');
         $adultpricetotal = $adultprice * DB::table('books')->select('no_of_adults')->where('status','=','booked')->where('user_id','=', $id)->value('no_of_adults');
         $childrenpricetotal = $childrenprice * DB::table('books')->select('no_of_children')->where('status','=','booked')->where('user_id','=', $id)->value('no_of_children');
         $totalbill = $adultpricetotal + $childrenpricetotal + $totalfacilitiesbill;
         $tenpercent = 10 / 100 * $totalbill;

/*ACCEPTED*/
         $bookinfo2 = DB::table('books')->where('user_id','=',$id)
             ->where('status','=','Accepted')
             ->where('book_date','>',$currentTime)
             ->get();
         $adultpricetotal2 = $adultprice * DB::table('books')->select('no_of_adults')->where('book_date','>',$currentTime)
                 ->where('status','=','Accepted')->where('user_id','=', $id)->value('no_of_adults');
         $childrenpricetotal2 = $childrenprice * DB::table('books')->select('no_of_children')->where('book_date','>',$currentTime)
                 ->where('status','=','Accepted')->where('user_id','=', $id)->value('no_of_children');
         $totalbill2 = $adultpricetotal2 + $childrenpricetotal2 + $totalfacilitiesbill;





        if (Book::where('user_id','=', $id)->where('status','=','booked')
            ->where('book_date','>',$currentTime)->exists())
        {
            $statusbook = 1;
        }
        elseif (Book::where('user_id','=', $id)->where('status','=','Accepted')
            ->where('book_date','>',$currentTime)->exists())
        {
            $statusbook = 2;
        }
        else{
            $statusbook = 0;
        }

         if (Review::where('user_id','=', $id)->exists()){
             $statusreview = 1;
         } else{
             $statusreview = 0;
         }

         $reviewinfo = Review::with('user')->where('user_id','=', $id)->first();

       return view('usersection.user-dashboard', compact('cottages', 'treehouse', 'functionhall', 'pavillionhall',
           'reservedcottage','totalfacilitiesbill','countreserved', 'auth_info' ,'adult','statusbook','bookinfo',
       'adultprice','childrenprice','adultpricetotal','childrenpricetotal','reservedtreehouse',
           'reservedfunction','reservedpavillion','parkinfo','totalbill','statusreview','reviewinfo','tenpercent','id','user_booked','bookinfo2',
           'childrenpricetotal2','adultpricetotal2','totalbill2'
       ))->with('success', 'Profile updated!');

    }
    public function printinvoice($id){
        $currentTime = Carbon::now();
        $user_id = Auth::id();
        $totalcotbill = DB::table('reserves')->where('status','=','Accepted')->where('reserve_date','>',$currentTime)->where('user_id','=',$user_id)->sum('amount');
        $totalpavbill = DB::table('reservepavillion')->where('status','=','Accepted')->where('reserve_date','>',$currentTime)->where('user_id','=',$user_id)->sum('amount');
        $totalfuncbill = DB::table('reservefunctionhall')->where('status','=','Accepted')->where('reserve_date','>',$currentTime)->where('user_id','=',$user_id)->sum('amount');
        $totaltrebill = DB::table('reservetreehouses')->where('status','=','Accepted')->where('reserve_date','>',$currentTime)->where('user_id','=',$user_id)->sum('amount');
        $totalfacilitiesbill = $totalcotbill+$totaltrebill+$totalfuncbill+$totalpavbill;


        $adultprice = DB::table('ticketprices')->select('price')
            ->where('name','=','adult')->value('price');
        $childrenprice = DB::table('ticketprices')->select('price')
            ->where('name','=','children')->value('price');
        $parkinfo = DB::table('aboutus')->get();
        $adultsnum = DB::table('books')->select('no_of_adults')->where('id',$id)->value('no_of_adults');
        $childnum = DB::table('books')->select('no_of_children')->where('id',$id)->value('no_of_children');
        $adultpricetotal2 = $adultprice * $adultsnum;
        $childrenpricetotal2 = $childrenprice *$childnum;
        $totalbill2 = $adultpricetotal2 + $childrenpricetotal2 + $totalfacilitiesbill;


        $bookinfo2 = DB::table('books')->where('id',$id)->get();
        $pdf_name = 'BPS000'.$id.'-'.'YourInvoice.pdf';
        $pdf = PDF::loadView('usersection.print.invoice',compact('bookinfo2',
            'parkinfo','adultprice','childrenprice','adultpricetotal2','childrenpricetotal2',
            'totalbill2','id','totalfacilitiesbill'));
        return $pdf->download($pdf_name);
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

        $problems = DB::table('problems')
//            ->where('status','=','unresolved')
            ->where('users_id','=', Auth::user()->id)
            ->latest()->get();

         return view('usersection.history.historyreport', compact('problems'));
    }

    public function practice(){
        $cottages = cottages::where('availability','available')->get();

        return view('usersection.facilities-display', compact('cottages'));
    }


}
