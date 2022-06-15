<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB; 
use App\Models\cottages;
use App\Models\User;
use App\Models\Reserve;
use App\Models\ReserveTreehouse;
use App\Models\ReserveFunctionHall;
use App\Models\ReservePavillion;
class SalesController extends Controller
{
    //
     public function salesCottage()
     {
     	  $orders1 = Reserve::where('status','New')->select(
           DB::raw('sum(amount) as sums'), 
           DB::raw("DATE_FORMAT(created_at,' %M %Y') as months"),
              )
              ->groupBy('months')
              ->orderBy('created_at')
              ->get();

               $orders2 = Reserve::where('status','New')->select(
           DB::raw('sum(amount) as sums'), 
           DB::raw("DATE_FORMAT(created_at,'%y') as months"),

              )
              ->groupBy('months')

              ->orderBy('created_at', 'Asc')
              ->get()->first();


        return view ('adminsection.Sales.cottage')->with(compact('orders1', 'orders2'));
   	}


   	  public function salesTreehouse()
     {
     	  $orders1 = ReserveTreehouse::where('status','New')->select(
           DB::raw('sum(amount) as sums'), 
           DB::raw("DATE_FORMAT(created_at,' %M %Y') as months"),
              )
              ->groupBy('months')
              ->orderBy('created_at')
              ->get();
  $orders2 = ReserveTreehouse::where('status','New')->select(
           DB::raw('sum(amount) as sums'), 
           DB::raw("DATE_FORMAT(created_at,'%y') as months"),

              )
              ->groupBy('months')

              ->orderBy('created_at', 'Asc')
              ->get()->first();

        return view ('adminsection.Sales.treehouse')->with(compact('orders1', 'orders2'));
   	}

 
      public function salesFunctionhall()
     {
        $orders1 = ReserveFunctionHall::where('status','New')->select(
           DB::raw('sum(amount) as sums'), 
           DB::raw("DATE_FORMAT(created_at,' %M %Y') as months"),
              )
              ->groupBy('months')
              ->orderBy('created_at')
              ->get();
  $orders2 = ReserveFunctionHall::where('status','New')->select(
           DB::raw('sum(amount) as sums'), 
           DB::raw("DATE_FORMAT(created_at,'%y') as months"),

              )
              ->groupBy('months')

              ->orderBy('created_at', 'Asc')
              ->get()->first();

        return view ('adminsection.Sales.functionhall')->with(compact('orders1', 'orders2'));
    }

  public function salesPavillionhall()
     {
        $orders1 = ReservePavillion::where('status','New')->select(
           DB::raw('sum(amount) as sums'), 
           DB::raw("DATE_FORMAT(created_at,' %M %Y') as months"),
              )
              ->groupBy('months')
              ->orderBy('created_at')
              ->get();
  $orders2 = ReservePavillion::where('status','New')->select(
           DB::raw('sum(amount) as sums'), 
           DB::raw("DATE_FORMAT(created_at,'%y') as months"),

              )
              ->groupBy('months')

              ->orderBy('created_at', 'Asc')
              ->get()->first();

        return view ('adminsection.Sales.pavillion')->with(compact('orders1', 'orders2'));
    }


   	 public function a(){

        
      $orders1 = Reserve::where('status',"New")->select(
           DB::raw('amount as sums'), 
           DB::raw("DATE_FORMAT(created_at,'%M %Y') as months"),
          
              )
              ->groupBy('months')
              ->orderBy('created_at', 'Asc')
              ->get();

         dd ($orders1); die;

        return view ('adminsection.Sales.cottage')->with(compact('orders1'));

        // return view ('admin.sales.daysale')->with(compact('data'));

    }
}
