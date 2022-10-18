<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Book;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\cottages;
use App\Models\User;
use App\Models\Reserve;
use App\Models\ReserveTreehouse;
use App\Models\ReserveFunctionHall;
use App\Models\ReservePavillion;
class SalesController extends Controller
{

    public function salesfacilities()
    {
        $cottagesales = Reserve::selectRaw('monthname(updated_at)as month,year(updated_at)as year, sum(amount)as totalsales')
            ->where('status', '=', 'paid')
            ->groupBy('month', 'year')
            ->orderBy('month', 'asc')
            ->get();

        $treehousesales = ReserveTreehouse::selectRaw('monthname(updated_at)as month,year(updated_at)as year, sum(amount)as totalsales')
            ->where('status', '=', 'paid')
            ->groupBy('month', 'year')
            ->orderBy('month', 'asc')
            ->get();

        $functionhallsales = ReserveFunctionHall::selectRaw('monthname(updated_at)as month,year(updated_at)as year, sum(amount)as totalsales')
            ->where('status', '=', 'paid')
            ->groupBy('month', 'year')
            ->orderBy('month', 'asc')
            ->get();
        $pavillionsales = ReservePavillion::selectRaw('monthname(updated_at)as month,year(updated_at)as year, sum(amount)as totalsales')
            ->where('status', '=', 'paid')
            ->groupBy('month', 'year')
            ->orderBy('month', 'asc')
            ->get();

$monthtoday= Carbon::now()->format('F');
        $salescot = DB::table('reserves')->where('status','=','Paid')->orderByRaw("DATE_FORMAT('d-m-Y',update_at), desc")->sum('amount');
        $salestree = DB::table('reservetreehouses')->where('status','=','Paid')->orderByRaw("DATE_FORMAT('d-m-Y',update_at), desc")->sum('amount');
        $salesfunc = DB::table('reservefunctionhall')->where('status','=','Paid')->orderByRaw("DATE_FORMAT('d-m-Y',update_at), desc")->sum('amount');
        $salespav = DB::table('reservepavillion')->where('status','=','Paid')->orderByRaw("DATE_FORMAT('d-m-Y',update_at), desc")->sum('amount');
        $totalearnings = $salescot+$salesfunc+$salestree+$salespav;

        $totalsales = Book::where('status','paid')->whereMonth('updated_at', Carbon::now()->month)
                        ->get();
        $countsales = Book::where('status','paid')->whereMonth('updated_at', Carbon::now()->month)->sum('total_bill');


        return view('adminsection.Sales.facilities-sale', compact('cottagesales', 'treehousesales',
            'functionhallsales', 'pavillionsales', 'salescot', 'totalearnings', 'monthtoday','totalsales', 'countsales'));
    }

    public function salestickets(){
        $ticketsales = Book::selectRaw('monthname(book_date)as month,year(book_date)as year, sum(ticket_price)as totalsales')
            ->where('status', '=', 'paid')
            ->groupBy('month', 'year')
            ->orderBy('month', 'desc')
            ->get();
        $ticketsalestotal = Book::selectRaw('monthname(book_date)as month,year(book_date)as year, sum(ticket_price)as totalsales')
            ->where('status', '=', 'paid')
            ->groupBy('month', 'year')
            ->orderBy('year', 'desc')
            ->get();

        $totalsales = Book::where('status','paid')->first();

        return view('adminsection.Sales.tickets-sale',compact('ticketsales','ticketsalestotal', 'totalsales'));
    }

    public function salesanually(){
        $anuallysales = Book::where('status','paid')->whereYear('book_date', Carbon::now()->year)
            ->get();
        $countsales = Book::where('status','paid')->whereYear('book_date', Carbon::now()->year)->sum('total_bill');
        return view('adminsection.Sales.anually-sale',compact('anuallysales','countsales'));
    }
    public function printanually(){
        $anuallysales = Book::where('status','paid')->whereYear('book_date', Carbon::now()->year)
            ->get();
        $countsales = Book::where('status','paid')->whereYear('book_date', Carbon::now()->year)->sum('total_bill');
        $name = AboutUs::pluck('name')->first();

        return view('adminsection.Sales.print.anual-report',compact('anuallysales','countsales', 'name'));
    }

    public function generatepdfanually(){
        $anuallysales = Book::where('status','paid')->whereYear('book_date', Carbon::now()->year)
            ->get();
        $countsales = Book::where('status','paid')->whereYear('book_date', Carbon::now()->year)->sum('total_bill');
        $year = Carbon::now()->format('Y');
        $name = AboutUs::pluck('name')->first();
        $pdf_name = $year . ' Earnings Report.pdf';
        $pdf = PDF::loadView('adminsection.Sales.print.anual-report',compact('anuallysales','countsales','name'))->setPaper('a4','landscape');

        return $pdf->download($pdf_name);
    }

    public function printmonthly(){
        $totalsales = Book::where('status','paid')->whereMonth('updated_at', Carbon::now()->month)
            ->get();
        $countsales = Book::where('status','paid')->whereMonth('updated_at', Carbon::now()->month)->sum('total_bill');
        $name = AboutUs::pluck('name')->first();
        $monthtoday= Carbon::now()->format('F');

        return view('adminsection.Sales.print.monthly-report',compact('totalsales','countsales', 'name','monthtoday'));
    }
    public function generatepdfmonthly(){
        $totalsales = Book::where('status','paid')->whereMonth('updated_at', Carbon::now()->month)
            ->get();
        $countsales = Book::where('status','paid')->whereMonth('updated_at', Carbon::now()->month)->sum('total_bill');
        $name = AboutUs::pluck('name')->first();
        $monthtoday= Carbon::now()->format('F');
        $pdf_name = $monthtoday . ' Earnings Report.pdf';
        $pdf = PDF::loadView('adminsection.Sales.print.monthly-report',compact('totalsales','countsales','name','monthtoday'))->setPaper('a4','landscape');

        return $pdf->download($pdf_name);
    }

}
