<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Models\UserInfo;
use App\Models\UserWallets;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(RegisterRequest $request)
    {

        // return $request;

        $sponsor = $request->sponsor;
        if( !$sponsor ){
            $sponsor = 0;
        }else{
            $userID = UserInfo::where('user_show_id', '=', $sponsor)->first();
            $sponsor = $userID->user_id;
        }

        if( count(explode(' ', $request->name)) < 2 ){
            return response()->json([
                'register' => true,
                'message' => 'Укажите Вашу Фамилию',
                'error' => 1,
            ]);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'sponsor_id' => $sponsor,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        $login = strtolower(str_replace('.', '', explode('@', $user->email)[0]));

        $checklogin = UserInfo::where('login', '=', $login)->first();

        if( $checklogin ){
            $login = $login.$user->id;
        }

        UserInfo::create([
            'name' => explode(' ', $request->name)[0],
            'surname' => explode(' ', $request->name)[1],
            'user_id' => $user->id,
            'login' => $login,
            'user_status' => 0,
        ]);

        UserWallets::create([
            'user_id' => $user->id,
        ]);

        return response()->json([
            'register' => true,
            'redirect' => route('cabinet')
        ]);
    }
}
