<?php

namespace App\Http\Controllers;

use App\Models\UserWallets;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function main(){

        $total_balance = UserWallets::sum('balance');

        return view('cabinet.admin', compact('total_balance'));
    }
}
