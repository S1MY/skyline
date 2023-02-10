<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class MainController extends Controller
{
    public function changeLocale($locale){

        session(['locale' => $locale]);

        // dd(session('locale'));

        App::setLocale($locale);
        return App::getLocale();

    }

    public function selectSponsor($id){

        $user = User::where('id', '=', $id)->first();

        if( $user ){
            $userId = UserInfo::where('user_id', '=', $id)->first();
            $id = $userId->user_show_id;
        }else{
            $userId = UserInfo::where('login', '=', $id)->first();
            $id = $userId->user_show_id;
        }

        UserInfo::where('user_show_id', '=', $id)->increment('click');

        session(['sponsor' => $id]);
        return redirect()->route('index');
    }

    public function restore($code){
        return view('auth.reset-password');
    }

}
