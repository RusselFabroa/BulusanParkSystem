<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminController extends Controller
{
    public function loginAdmins(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:admins,email',
            'password' => 'required|min:5|max:30',
        ],[
            'email.exists'=>'This email is not exist.'
        ]);

        $credentials = $request->only('email', 'password' );
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.home');
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
        $totalverifiedusers = DB::table('users')->where('is_verified','1')-> count();
        $totalnotverified = DB::table('users')->where('is_verified','0')-> count();
        $totaladmin = DB::table('admins')-> count();
        $totalreservetreehouses = DB::table('reservetreehouses')->where('status', 'New')->count();
        $totalreservecottages = DB::table('reserves')->where('status', 'New')->count();

        //CountofAcceptedReservation
        $countCot=DB::table('reserves')->where('status','=','New')->count();
        $countTre=DB::table('reservetreehouses')->where('status','=','New')->count();
        $countFun=DB::table('reservefunctionhall')->where('status','=','New')->count();
        $countPav=DB::table('reservepavillion')->where('status','=','New')->count();

        $countProb=DB::table('problems')->where('status','=','unresolved')->count();

        return view('adminsection.admin-dashboard', compact('totalcottages','totalverifiedusers','totaladmin',
            'totalnotverified','totalreservecottages', 'totalreservetreehouses',
            'countCot','countTre','countFun','countPav',
            'countProb'
        ));
    }
}




