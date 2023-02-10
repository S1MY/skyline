<?php

namespace App\Http\Controllers;

use App\Models\Operation;
use App\Models\UserWallets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CashController extends Controller
{

    public function pay(Request $request){

        $depositeVariants = ['PAYEER'];

        if( !$request->platname ){
            return response()->json([
                'pay' => true,
                'message' => 'Платёжная система не выбрана.',
                'error' => 1,
            ]);
        }

        if( !in_array($request->platname, $depositeVariants) ){
            return response()->json([
                'pay' => true,
                'message' => 'Данная платёжная система не поддерживается.',
                'error' => 1,
            ]);
        }

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
