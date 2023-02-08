<?php

namespace App\Http\Controllers;

use App\Models\Operation;
use App\Models\User;
use App\Models\UserWallets;
use Illuminate\Http\Request;

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
            ->paginate(5);

        return view('cabinet.admin', compact('total_balance', 'auto_balance',
                                            'house_balance', 'invest_balance',
                                            'auto_partners', 'house_partners',
                                            'invest_partners', 'operations',
                                            'users'));
    }
}
