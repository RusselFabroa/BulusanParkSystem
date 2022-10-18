<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\AboutUs;
use App\Models\Activity;
use App\Models\Book;
use App\Models\events;
use App\Models\Reserve;
use App\Models\ReserveFunctionHall;
use App\Models\ReservePavillion;
use App\Models\ReserveTreehouse;
use App\Models\TicketPrice;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Queue\RedisQueue;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\File;
use phpDocumentor\Reflection\Utils;

class AdminController extends Controller
{
    public function loginAdmins(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:admins,email',
            'password' => 'required|min:5|max:30',
        ],
            [
            'email.exists'=>'This email is not exist.'
        ]);

        $credentials = $request->only('email', 'password' );
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.home');
        }
        else if (Auth::guard('web')->attempt($credentials)) {
            return redirect()->route('user.home');
        }
        else{
            return redirect()->route('admin.login')->with('error', 'Invalid Credentials');
        }
    }

    public function check(Request $request){
        $request->validate([
            'email' => 'required|email|exists:admins,email',
            'password' => 'required|min:5|max:30',
            ],[
            'email.exists'=>'This email is not exist.'
        ]);
    }

    public function adminlogout(){

        Auth::guard('admin')->logout();
        return redirect('/');
    }



    public function countRecord(){

        $totalcottages = DB::table('cottages')->count();
        $totalverifiedusers = DB::table('users')->where('email_verified','1')-> count();
        $totalnotverified = DB::table('users')->where('email_verified','0')-> count();
        $totaladmin = DB::table('admins')-> count();
        $totalreservetreehouses = DB::table('reservetreehouses')->where('status', 'New')->count();
        $totalreservecottages = DB::table('reserves')->where('status', 'New')->count();

        //CountofAcceptedReservation
        $countCot=DB::table('reserves')->where('status','=','New')->count();
        $countTre=DB::table('reservetreehouses')->where('status','=','New')->count();
        $countFun=DB::table('reservefunctionhall')->where('status','=','New')->count();
        $countPav=DB::table('reservepavillion')->where('status','=','New')->count();

        $countProb=DB::table('problems')->where('status','=','unresolved')->count();


        $monthtoday= Carbon::now()->format('F');
        $yeartoday=Carbon::now()->format('Y');
        $today = Carbon::today();

        $salescot = DB::table('reserves')->where('status','=','Paid')->orderByRaw("DATE_FORMAT('d-m-Y',update_at), desc")->sum('amount');
        $salestree = DB::table('reservetreehouses')->where('status','=','Paid')->orderByRaw("DATE_FORMAT('d-m-Y',update_at), desc")->sum('amount');
        $salesfunc = DB::table('reservefunctionhall')->where('status','=','Paid')->orderByRaw("DATE_FORMAT('d-m-Y',update_at), desc")->sum('amount');
        $salespav = DB::table('reservepavillion')->where('status','=','Paid')->orderByRaw("DATE_FORMAT('d-m-Y',update_at), desc")->sum('amount');
        $totalearnings = $salescot+$salesfunc+$salestree+$salespav;

        $unpaidbooks = DB::table('books')->where('status','=','booked')->count();


        $chart_users = Book::select(DB::raw("month(created_at) as months"),
                                    DB::raw("SUM(no_of_adults) as total_adults"),
                                    DB::raw("SUM(no_of_children) as total_children"))
                                    ->orderBy(DB::raw("month(created_at)"))
                                    ->groupBy(DB::raw("month(created_at)"))
                                    ->get();
        $response[] = ['months','total_adults','total_children'];
        foreach ($chart_users as $key => $val){
            $response[++$key] = [$val->months, (int)$val->total_adults, (int)$val->total_children];
        }

        /* $books_chart = Book::select('id','created_at')->get()->groupBy(function ($books_chart){
             return Carbon::parse($books_chart->created_at)->format('M');
         });

         $months=[];
         $monthCount=[];

         foreach ($books_chart as $month => $values){
             $months[]=$month;
             $monthCount[]=count($values);
         }
         $verified_user=User::where('email_verified','1')->get();
         $pending_user=User::where('email_verified','0')->get();
         $ver_count = count($verified_user);
         $pen_count = count($pending_user);
        */



        return view('adminsection.admin-dashboard', compact('totalcottages','totalverifiedusers','totaladmin',
            'totalnotverified','totalreservecottages', 'totalreservetreehouses',
            'countCot','countTre','countFun','countPav',
            'countProb','salespav','monthtoday','totalearnings','yeartoday','unpaidbooks',

        ))->with('chart_users',json_encode($response));
    }








//manage user
    public function listmanageuser(){
        $admin = DB::table('admins')->get();
        return view('adminsection.manage-users', compact('admin',));
    }
    public function listuser(){
        $user = DB::table('users')->get();
        return view('adminsection.manage-users-userlist', compact('user'));
    }




    public function listaboutus(){
        $info = DB::table('aboutus')->get();
        return view('adminsection.aboutus-list',compact('info'));
    }
    public function editaboutus(Request $request, $id){
        $info = DB::table('aboutus')
            ->where('id','=',$id)
            ->first();
        return view('adminsection.aboutus-edit',compact('info'));
    }
    public function updateaboutus(Request $request, $id){
        $info = AboutUs::find($id);
        $info->name = $request['name'];
        $info->status = $request['status'];
        $info->email = $request['email'];
        $info->description = $request['description'];
        $info->gcash_number = $request['gcash_number'];
        $info->paymaya_number = $request['paymaya_number'];
        $info->bankaccount1 = $request['bankaccount1'];
        $info->bankaccount2 = $request['bankaccount2'];
        $info->bankaccount3 = $request['bankaccount3'];
        $info->bankaccount1_name = $request['bankaccount1_name'];
        $info->bankaccount2_name = $request['bankaccount2_name'];
        $info->bankaccount3_name = $request['bankaccount3_name'];
        $info->update();
        return back()->with('success','Succesfully Updated!');
    }

    public function listbook(){
        $book = DB::table('books')
            ->where('status','!=','paid')
            ->get();
        return view('adminsection.book-list', compact('book'));
    }
    public function listpaidbook(){
        $book = DB::table('books')
            ->where('status','=','paid')
            ->get();
        return view('adminsection.bookpaid-list', compact('book'));
    }



     public function updatebook($id,$user_id, Request $request){

        //Booking and All Reservation will be paid
        $book = Book::find($id);
        if($request->status == 'paid')
        {
            $book->status = 'paid';
            $book -> update();

            //reservedCottage -> paid
            Reserve::with('cottage')->where('user_id','=',$user_id)
                ->where('status','=','Accept')
                ->update(['status'=>'Paid']);

            //reservedTreeHouse -> paid
            ReserveTreehouse::with('treehouse')->where('user_id','=',$user_id)
                ->where('status','=','Accept')
                ->update(['status'=>'Paid']);

            //reservedFunctionhall -> paid
            ReserveFunctionHall::with('functionhall')->where('user_id','=',$user_id)
                ->where('status','=','Accept')
                ->update(['status'=>'Paid']);

            //reservedPavillion -> paid
            ReservePavillion::with('pavillionhall')->where('user_id','=',$user_id)
                ->where('status','=','Accept')
                ->update(['status'=>'Paid']);





            return back()->with('success','Data saved!');
        }
        else {
            return back()->with('error','Error! Click the paid button first!');
        }

     }


     public function addadmin(){
        return view('register-admin');
     }


    public function changebookstatus(Request $request){
        $book = Book::find($request->book_id);
        $book->status = $request->status;
        $book->save();
        return response()->json(['success'=>'Status saved succesfully']);
    }

    public function printpayment($id){
//        $book = Book::find($id);
        $book = DB::table('books')->where('id',$id)->get();
        $book_name = DB::table('books')->where('id',$id)->pluck('fullname')->first();
        $book_id = DB::table('books')->where('id',$id)->pluck('id')->first();
        $pdf_name = 'BPS000'.$book_id.'-'.$book_name. ' Payment.pdf';
        $pdf = PDF::loadView('adminsection.Sales.print.payment',compact('book'));
        return $pdf->download($pdf_name);
    }
    public function updatebookstatus($id)
    {
        $book = Book::find($id);
        $book->status = 'Accepted';
        $book->update();
        return back()->with('success','Booking are Accepted!');
    }






    public function settings(){

       $ticket = DB::table('ticketprices')->get();
         return view('adminsection.settings',compact('ticket'));
    }

    public function updatetickets($id, Request $request){

        $tickets = TicketPrice::find($id);
        $tickets->price = $request['price'];
        $tickets->update();

        return back()->with('success', 'Successfully Updated!');

    }

        /*Activities & Events*/
    public function listactivity(){

        $activity = Activity::all();
        return view('adminsection.activity-list', compact('activity'));
    }
    public function addactivity(){
        return view('adminsection.activity-add');
    }

    public function saveactivity(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'start' => 'required|after:today',
            'end' => 'required|after:start',
            'description' => 'required',
        ]);

        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('uploads/activities/', $filename);

        DB::table('activities')->insert([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $filename,
            'start' => $request->start,
            'end' => $request->end,
        ]);

        return back()->with('success', 'Events Added Successfully!');
    }



        public function editactivity($id, Request $request){
            $activity = Activity::find($id);


            return view ('adminsection.activity-edit', compact('activity'));

        }

    public function updateactivity($id, Request $request){

        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'start' => 'required|after:today',
            'end' => 'required|after:start',
            'description' => 'required',
        ]);


        $activity = Activity::find($id);
        $activity->name = $request->input('name');
        $activity->description = $request->input('description');
        $activity->start = $request->input('start');
        $activity->end = $request->input('end');

        $destination='uploads/activities/'.$activity->image;
        //delete same pic
        if(File::exists($destination))
        {
            File::delete($destination);
        }

        //pag-save ng image sa local storage
        $file = $request->file('image');
        $extension=$file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $file->move('uploads/activities/',$filename);
        $activity->image = $filename;
        $activity->update();

        return redirect()->back()->with('success','Updated Successfully!');


    }

    public function deleteactivity($id, Request $request){
        $activity = Activity::find($id);
        $activity->delete();

        return redirect()->back()->with('success','Deleted Successfully!');

    }


public function showCalendar(Request $request){
    if($request->ajax())
    {
        $data = events::whereDate('start', '>=', $request->start)
            ->whereDate('end',   '<=', $request->end)
            ->get(['id', 'title', 'start', 'end']);
        return response()->json($data);
    }
    return view('adminsection.calendar');
}

public function trysms(){

        return view('practice-page');
}

}




