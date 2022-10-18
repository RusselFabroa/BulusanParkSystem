<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\SignupEmail;
use App\Mail\SignupEmail2;
use App\Models\AboutUs;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailNotify;


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

    public function index(){
        $info = AboutUs::all();
        $data = [
            'subject'=>'Calapan Nature Park Reservation Notice',
            'body'=>'Hello, This is Calapan Nature Park. We have received your request reservation and we like to notice you that the ------ is available.
                    And we accepted your reservation '
        ];
        try {
            Mail::to('dapitochiarramae16@gmail.com')->send( new MailNotify($data));
            return response()->json(['Great check your mail box']);
        }
        catch (Exception $th){
            return response()->json(['Sorry something went wrong!']);
        }

    }
}
