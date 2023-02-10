<?php

namespace App\Http\Controllers;

use App\Mail\EmailConfirm;
use App\Mail\LostPassword;
use App\Models\User;
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

        $user = User::where('email', '=', $request->mail)->first();

        if( !$user ){
            return response()->json([
                'updated' => true,
                'message' => 'Пользовать с данным E-mail: '.$request->mail.' не зарегистрирован!',
                'error' => 1,
            ]);
        }

        $code = rand(000000, 999999);

        session(['lostPwd'=>['code'=>hash::make($code), 'user'=>$user->id]]);

        $link = route('restore', ['code' => $code]);

        Mail::to($request->mail)->send(new LostPassword($link));

        return response()->json([
            'updated' => true,
            'message' => 'Вам на почту отправлена ссылка для смены пароля!',
            'error' => 0,
        ]);
    }
}
