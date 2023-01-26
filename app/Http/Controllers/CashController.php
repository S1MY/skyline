<?php

namespace App\Http\Controllers;

use App\Models\Operation;
use App\Models\UserWallets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CashController extends Controller
{

    public function pay(Request $request){

        Operation::create([
            'type' => 0,
            'status' => 1, // После изменить на 0
            'value' => $request->amount,
            'system' => $request->platname,
            'user_id' => Auth::user()->id,
        ]);

        $wallet = UserWallets::where('user_id', '=', Auth::user()->id)->first();
        $wallet->balance = $wallet->balance + $request->amount;
        $wallet->save();

        return response()->json([
            'pay' => true,
            'message' => 'Пополнение успешно!',
            'error' => 0,
        ]);

    }
}
