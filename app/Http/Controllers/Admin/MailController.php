<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\SignupEmail;
use App\Mail\SignupEmail2;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public static function sendSignupEmail($name, $email, $verification_code){
        $data = [
            'name' => $name,
            'verification_code' => $verification_code
        ];

        Mail::to($email)->send(new SignupEmail($data));
    }

    public static function sendSignupEmail2($name, $email, $verification_code){
        $data = [
            'name' => $name,
            'verification_code' => $verification_code
        ];

        Mail::to($email)->send(new SignupEmail2($data));
    }
}
