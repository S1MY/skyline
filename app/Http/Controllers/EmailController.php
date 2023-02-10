<?php

namespace App\Http\Controllers;

use App\Mail\EmailConfirm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function confirmEmail(Request $request){

        $emailUser = Auth::user()->email;
        $emailSend = $request->email;

        if( $emailUser != $emailSend ){
            return 'Вы отправили парашу';
        }

        $code = rand(000000, 999999);

        session(['hashed_code' => Hash::make($code)]);

        Mail::to($emailUser)->send(new EmailConfirm($code));

        return 1;

    }

    public function lostPassword(Request $request){
        return $request;
    }
}
