<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\Messages;
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

        Messages::create([
            'message' => 'Поздравляем! Вы успешно прошли регистрацию на проекте <span class="_bold">Myskyline</span>! У вас есть 48 часов для ознакомления и покупки пакета!',
            'en_message' => 'Congratulations! You have successfully registered on the project <span class="_bold">Myskyline</span>! You have 48 hours to review and purchase the package!',
            'de_message' => 'Herzlichen Glückwunsch! Sie haben sich erfolgreich für das Projekt <span class="_bold">Myskyline</span> registriert! Sie haben 48 Stunden Zeit, um das Paket zu überprüfen und zu kaufen!',
            'checked' => serialize(array()),
            'from' => 0,
            'to' => $user->id,
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
