<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Admin\MailController;
use App\Http\Controllers\Controller;
use App\Models\admin;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Session;
use App\Models\VerifyUser;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\Models\User
     */


    public function register(Request $request)
    {

        //validate input
        $request->validate([
            'name' => 'required', 'string', 'max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|max:30',
            'cpassword' => 'required|min:8|max:30|same:password'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->verification_code = sha1(time());
        $user->save();
        $last_id = $user->id;

        $token = $last_id . hash('sha256', \Str::random(120));
        $verifyURL = route('user.verify', ['token' => $token, 'service' => 'Email_verification']);

        VerifyUser::create([
            'user_id' => $last_id,
            'token' => $token,
        ]);

        if ($user != null) {
            MailController::sendSignupEmail($user->name, $user->email, $user->verification_code);
            return redirect()->back()->with('success', 'Your account has been created. Please check your email for verification link. ');
        }

        return redirect()->back()->with('danger', 'Something went wrong!');

    }

    public function verifyUser(Request $request)
    {
        $verification_code = \Illuminate\Support\Facades\Request::get('code');
        $user = User::where(['verification_code' => $verification_code])->first();
        if ($user != null) {
            $user->is_verified = 1;
            $user->save();
            return redirect()->route('user.login')->with('success', 'Your account is verified. Please login!');
        }

        return redirect()->route('logincustomer')->with('error', 'Invalid verification code!');


    }

















//Admin Controller Function/
    public function registerAdmins(Request $request){
        $admin = new admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->verification_code = sha1(time());
        $admin->save();

        if($admin != null){
            MailController::sendSignupEmail2($admin->name, $admin->email , $admin->verification_code);
            return redirect()->back()->with('success','Your account has been created. Please check your email for verification link. ');
        }

        return redirect()->back()->with('error','Something went wrong!');

    }

    public function verifyAdmins(Request $request){
        $verification_code = \Illuminate\Support\Facades\Request::get('code');
        $admin = admin::where(['verification_code' => $verification_code])->first();
        if($admin != null){
            $admin->is_verified = 1;
            $admin->save();
            return redirect()->route('loginadmin')->with('success', 'Your account is verified. Please login!');
        }

        return redirect()->route('logincustomer')->with('error','Invalid verification code!');
    }
}



