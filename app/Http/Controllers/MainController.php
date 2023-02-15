<?php

namespace App\Http\Controllers;

use App\Models\Operation;
use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

        if( !Hash::check($code, session('lostPwd')['code']) ){
            session()->flash('warning', 'Секретный код не соотвествует!');
            return redirect()->route('index');
        }

        return view('restore');
    }

    public function success(){
        session()->flash('success', 'Оплата прошла успешно!');

        $operations = Operation::leftJoin('user_infos', 'user_infos.user_id', '=', 'operations.user_id')
        ->select('operations.created_at', 'operations.value', 'operations.type', 'user_infos.name', 'user_infos.surname', 'user_infos.user_show_id')
        ->where('operations.user_id', '=', Auth::user()->id)
        ->where('operations.status', '=', 1)
        ->orderBy('operations.id', 'desc')
        ->limit(10)
        ->get();

        $output = Operation::where('user_id', '=', Auth::user()->id)
        ->where('status', '=', 1)
        ->where('type', '=', 1)
        ->sum('value');

        return view('cabinet.main', compact('operations', 'output'));
    }

    public function fail(){
        session()->flash('warning', 'При оплате произошла ошибка. Повторите попытку позже!');

        $operations = Operation::leftJoin('user_infos', 'user_infos.user_id', '=', 'operations.user_id')
        ->select('operations.created_at', 'operations.value', 'operations.type', 'user_infos.name', 'user_infos.surname', 'user_infos.user_show_id')
        ->where('operations.user_id', '=', Auth::user()->id)
        ->where('operations.status', '=', 1)
        ->orderBy('operations.id', 'desc')
        ->limit(10)
        ->get();

        $output = Operation::where('user_id', '=', Auth::user()->id)
        ->where('status', '=', 1)
        ->where('type', '=', 1)
        ->sum('value');

        return view('cabinet.main', compact('operations', 'output'));
    }

}
