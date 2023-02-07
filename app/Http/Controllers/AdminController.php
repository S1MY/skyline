<?php

namespace App\Http\Controllers;

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

        return view('cabinet.admin', compact('total_balance', 'auto_balance', 'house_balance', 'invest_balance', 'auto_partners'));
    }
}
