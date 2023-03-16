<?php

namespace App\Http\Controllers;

use App\Models\Operation;
use App\Models\UserWallets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CashController extends Controller
{

    public function pay(Request $request){

        $depositeVariants = ['ePayCore'];

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

        $operation = Operation::create([
            'type' => 0,
            'status' => 0,
            'value' => $request->amount,
            'system' => $request->platname,
            'user_id' => Auth::user()->id,
        ]);

        $m_shop = '1830538379';
        $merchant_id = $operation->id;
        $amount = number_format($request->amount, 2, '.', '');

        if( Auth::user()->id == 1 ){
            $amount = number_format(10, 2, '.', '');
        }

        $params = [
            'epc_merchant_id' => 102335,
            'epc_commission' => 2,
            'epc_amount' => $amount,
            'epc_currency_code' => 'EUR',
            'epc_order_id' => $operation->id,
            'epc_success_url' => 'https://myskylinecompany.com/epaycore/success',
            'epc_cancel_url' => 'https://myskylinecompany.com/epaycore/fail',
            'epc_status_url' => 'https://myskylinecompany.com/epaycore/status',
            'epc_descr' => 'Оплата MySkyLine'
        ];
        # form
        $form = '<form action="https://api.epaycore.com/checkout/form" method="POST">';

        # append query params to form
        foreach($params AS $key => $val)
        {
        $form .= '<input type="hidden" name="'.$key.'" value="'.$val.'">';
        }

        # epc_sign params
        $sign = [
            $params['epc_merchant_id'],
            $params['epc_amount'],
            $params['epc_currency_code'],
            $params['epc_order_id'],
            '5K4oANstnfYDShTZ'
        ];

        # get epc_sign hash
        $sign = hash('sha256', implode(':', $sign));

        # append epc_sign, submit button and finally close form
        $form .= '<input type="hidden" name="epc_sign" value="'.$sign.'">';
        $form .= '<button type="submit">CHECKOUT</button>';
        $form .= '</form>';

        # display form
        return $form;

    }

    public function status(Request $request){

        if(isset($request->epc_batch) && isset($request->epc_sign))
        {
           # your merchant password
           $password = '0QaWLgv6NcOe8OQT';

           # sign params
           $sign = [
                $request->epc_merchant_id,
                $request->epc_order_id,
                $request->epc_created_at,
                $request->epc_amount,
                $request->epc_currency_code,
                $request->epc_dst_account,
                $request->epc_src_account,
                $request->epc_batch,
                $password
           ];

           # get sha256 signature
           $sign = hash('sha256', implode(':', $sign));

           # if signature not valid
           if($request->epc_sign !== $sign)
           {
              # set header 400
              header('HTTP/1.1 400 Bad request');

              # exit
              die('Invalid signature');
           }

           # if signature valid
           echo $request->epc_batch;

           $operation = Operation::where('id', '=', $request->epc_order_id)->first();
           $operation->status = 1;
           $operation->save();

           $user_id = $operation->user_id;

           $balance = UserWallets::where('user_id', '=', $user_id)->first();
           $balance->balance = $balance->balance + $operation->value;
           $balance->save();

        }

        return 1;
    }
}
