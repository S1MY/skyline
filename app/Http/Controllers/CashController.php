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
            'status' => 0, // После изменить на 0
            'value' => $request->amount,
            'system' => $request->platname,
            'user_id' => Auth::user()->id,
        ]);

        $m_shop = '1830538379';
        $m_orderid = Auth::user()->id;
        $m_amount = number_format($request->amount, 2, '.', '');

        if( Auth::user()->id == 1 ){
            $m_amount = number_format(10, 2, '.', '');
        }

        $m_curr = 'EUR';
        $m_desc = base64_encode('Пополнение баланса MySkyLine Company');
        $m_key = 'OyWD8qfN4eFPqaQd';

        $arHash = array(
            $m_shop,
            $m_orderid,
            $m_amount,
            $m_curr,
            $m_desc
        );

        $arHash[] = $m_key;

        $sign = strtoupper(hash('sha256', implode(':', $arHash)));
        $form = '<form method="post" action="https://payeer.com/merchant/">
                    <input type="hidden" name="m_shop" value="'.$m_shop.'">
                    <input type="hidden" name="m_orderid" value="'.$m_orderid.'">
                    <input type="hidden" name="m_amount" value="'.$m_amount.'">
                    <input type="hidden" name="m_curr" value="'.$m_curr.'">
                    <input type="hidden" name="m_desc" value="'.$m_desc.'">
                    <input type="hidden" name="m_sign" value="'.$sign.'">
                    <input type="submit" name="m_process" value="send" />
                </form>';

        return $form;

        // $wallet = UserWallets::where('user_id', '=', Auth::user()->id)->first();
        // $wallet->balance = $wallet->balance + $request->amount;
        // $wallet->save();

        // return response()->json([
        //     'pay' => true,
        //     'message' => 'Пополнение успешно!',
        //     'error' => 0,
        // ]);

    }
}
