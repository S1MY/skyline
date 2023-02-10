<?php

namespace App\Http\Controllers;

use App\Models\Operation;
use App\Models\User;
use App\Models\UserInfo;
use App\Models\UserWallets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function main(){

        // Балансы
            $total_balance = UserWallets::sum('balance');
            $auto_balance = UserWallets::sum('autobalance');
            $house_balance = UserWallets::sum('housebalance');
            $invest_balance = UserWallets::sum('investbalance');

        // Вывод людей
            $auto_partners = UserWallets::leftJoin('user_infos as ui', 'ui.user_id', '=', 'user_wallets.id')
            ->select('ui.name', 'ui.surname', 'ui.user_show_id', 'ui.user_id', 'autobalance')
            ->where('autobalance', '>', 0)
            ->orderBy('autobalance', 'desc')
            ->paginate(5);

            $house_partners = UserWallets::leftJoin('user_infos as ui', 'ui.user_id', '=', 'user_wallets.id')
            ->select('ui.name', 'ui.surname', 'ui.user_show_id', 'ui.user_id', 'housebalance')
            ->where('housebalance', '>', 0)
            ->orderBy('housebalance', 'desc')
            ->paginate(5);

            $invest_partners = UserWallets::leftJoin('user_infos as ui', 'ui.user_id', '=', 'user_wallets.id')
            ->select('ui.name', 'ui.surname', 'ui.user_show_id', 'ui.user_id', 'investbalance')
            ->where('investbalance', '>', 0)
            ->orderBy('investbalance', 'desc')
            ->paginate(5);

        // История операций
            $operations = Operation::leftJoin('user_infos as ui', 'ui.user_id', '=', 'operations.user_id')
            ->leftJoin('users as u', 'u.id', '=', 'operations.user_id')
            ->select('ui.name', 'ui.surname', 'ui.user_show_id', 'ui.user_id', 'type', 'value', 'operations.created_at', 'u.name as uname')
            ->orderBy('operations.created_at', 'desc')
            ->paginate(10);

        // Без пригласителя
            $users = User::leftJoin('user_infos as ui', 'ui.user_id', '=', 'users.id')
            ->select('ui.name', 'ui.surname', 'ui.user_show_id', 'users.created_at')
            ->where('sponsor_id', '=', 0)
            ->where('user_show_id', '!=', 'null')
            ->paginate(5, ['*'], 'user_page');

        return view('cabinet.admin', compact('total_balance', 'auto_balance',
                                            'house_balance', 'invest_balance',
                                            'auto_partners', 'house_partners',
                                            'invest_partners', 'operations',
                                            'users'));
    }

    public function showUser($user){
        Auth::guard('web')->logout();

        $authUserInfo = UserInfo::where('user_show_id', '=', $user)->orWhere('user_id', '=', $user)->first();

        $authUser = User::where('id', '=', $authUserInfo->user_id)->first();

        Auth::login($authUser);

        return redirect()->route('cabinet');

    }

    public function getUserInfo(Request $request){

        $user = $request->id;

        // return $request;

        if( $request->type != 'edit' ){
            $userInfo = UserInfo::leftJoin('users as u', 'u.id', '=', 'user_infos.user_id')
            ->select('user_infos.name', 'user_infos.surname', 'user_infos.user_show_id', 'u.email', 'user_infos.avatar')
            ->where('user_show_id', '=', $user)
            ->orWhere('user_id', '=', $user)
            ->first();
        }else{
            $userInfo = UserInfo::select('name', 'surname', 'user_id', 'user_show_id', 'avatar')
            ->where('user_show_id', '=', $user)
            ->orWhere('user_id', '=', $user)
            ->first();

            $sponsorShowId = User::where('id', '=', $userInfo->user_id)->first();

            if( $sponsorShowId->sponsor_id == 0 ){
                $sponsorShowId = '00000';
            }else{
                $sponsorShowId = UserInfo::where('user_id', '=', $sponsorShowId->sponsor_id)->first();
                $sponsorShowId = $sponsorShowId->user_show_id;
            }

            $userInfo->sponsor_show = $sponsorShowId;
        }

        return $userInfo;
    }

    public function changeSponsor(Request $request){

        $newSponsorId = $request->refid;
        $userUpdateId = $request->id;

        $newSponsorId = UserInfo::where('user_show_id', '=', $newSponsorId)->first();

        if( !$newSponsorId ){
            return response()->json([
                'updated' => true,
                'message' => 'Не удалось найти спонсора с ID: '.$request->refid,
                'error' => 1,
            ]);
        }

        $newSponsorId = $newSponsorId->user_id;

        $user = User::where('id', '=', $userUpdateId)->first();
        $user->sponsor_id = $newSponsorId;
        $user->save();

        return response()->json([
            'updated' => true,
            'message' => 'Спонсор обновлён успешно!',
            'error' => 0,
        ]);
    }

}
