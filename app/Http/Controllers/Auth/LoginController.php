<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function credentials(Request $request){
        return array_merge($request->only($this->username(), 'password', ['is_verified' => 1]));
    }

    public function check(Request $request){
    $request->validate([
        'email' => 'required|email|exists:users,email',
        'password' => 'required',
    ]);
}
    public function loginCustomer(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ],[
            'email.exists'=>'This email is not exist.'
        ]);

        $credentials = $request->only('email', 'password' );
        if (Auth::guard('web')->attempt($credentials)) {
            return redirect()->route('user.home');
        }
        else{
            return redirect()->route('user.login')->with('error', 'Invalid Credentials');
        }


    }

    public function adminform()
    {
        return view('login-admin');
    }



    public function userlogout(){
        Auth()->logout();
        return redirect('/');
    }
}
