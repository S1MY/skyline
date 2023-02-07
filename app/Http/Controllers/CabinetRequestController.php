<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Operation;
use App\Models\User;
use App\Models\UserInfo;
use App\Models\UserPartner;
use App\Models\UserWallets;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CabinetRequestController extends Controller
{

    public function showPartnerInfo($pacage, $id){

        $userInfo = UserInfo::where('login', '=', $id)->first();

        $id = $userInfo->user_id;

        $user = User::where('id', '=', $id)->first();

        if( !$user ){
            session()->flash('warning', 'Не смогли найти данного пользователя');
            return redirect()->route('cabinet');
        }

        if( $user->sponsor_id == Auth::user()->id ){
            $partnerLvl = 1;
        }else{
            $partnerInfo = User::where('id', '=', $user->sponsor_id)->first();

            if ( $partnerInfo->sponsor_id == Auth::user()->id ){
                $partnerLvl = 2;
            }else{
                $partnerInfo1 = User::where('id', '=', $partnerInfo->sponsor_id)->first();
                if ( $partnerInfo1->sponsor_id == Auth::user()->id ){
                    $partnerLvl = 3;
                }else{
                    session()->flash('warning', 'Данный пользователь не ваш реферал');
                    return redirect()->route('cabinet');
                }
            }
        }

        // dd($user->sponsor_id);

        $pacageView = 0;
        if( $pacage == 'econom' ){
            $pacageView = 1;
        }elseif ($pacage == 'standard') {
            $pacageView = 2;
        }elseif ($pacage == 'premium') {
            $pacageView = 3;
        }

        if( Auth::user()->userInfo->user_pacage < $pacageView ){
            session()->flash('warning', 'У вас не приобретён данный пакет');
            return redirect()->route('cabinet');
        }

        // Партнёры разбитые по страницам
        $partners = User::leftJoin('user_infos as ui', 'ui.user_id', '=', 'users.id')
        ->leftJoin('user_partners as up', 'up.user_id', '=', 'users.id')
        ->select('users.id', 'ui.login', 'users.email', 'ui.name', 'ui.surname', 'ui.user_show_id', 'ui.user_status', 'up.user_first_line', 'up.user_second_line', 'up.user_third_line', 'up.user_fourth_line')
        ->where('up.pacage', '=', $pacageView)
        ->where('users.sponsor_id', '=', $user->id)
        ->paginate(9);

        $partnersInLine = UserPartner::where('user_id', '=', Auth::user()->id)
        ->where('pacage', '=', $pacageView)
        ->first();

        $partnersInUserLine = UserPartner::where('user_id', '=', $user->id)
        ->where('pacage', '=', $pacageView)
        ->first();

        return view('cabinet.layouts.pacage', compact('pacage', 'partners', 'partnersInLine', 'partnersInUserLine', 'partnerLvl'));
    }

    public function updateUserInfo(Request $request){

        $userInfo = UserInfo::where('user_id', '=', Auth::user()->id)->first();

        $userInfo->name = $request->fname;
        $userInfo->surname = $request->lname;
        $userInfo->phone = $request->phone;
        $userInfo->birth = date('Y-m-d', strtotime($request->bdate));
        $userInfo->sex = $request->gender;
        $userInfo->country = $request->country;
        $userInfo->city = $request->city;

        $userInfo->save();

        return response()->json([
            'updated' => true,
            'redirect' => route('settings')
        ]);
    }

    public function passwordChanger(Request $request){

        $currentPassword = Auth::user()->password;

        $oldPassword = $request->oldpass;
        $newPassword = $request->newpass;

        if (Hash::check($oldPassword, $currentPassword)) {

            $user = User::where('id', '=', Auth::user()->id)->first();
            $user->password = Hash::make($newPassword);
            $user->save();

        }else{
            return response()->json([
                'changer' => true,
                'error' => 1,
                'message' => 'Старый пароль введён не верно.'
            ]);
        }

        return response()->json([
            'changer' => true,
            'error' => 0,
        ]);
    }

    public function setAvatar(Request $request){

        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:png,jpg,jpeg|max:2048'
        ]);

        if ($validator->fails()) {

            $data['success'] = 0;
            $data['error'] = $validator->errors()->first('file');// Error response

        }else{
            if($request->file('file')) {

                $file = $request->file('file');
                $filename = time().'_'.$file->getClientOriginalName();

                // File extension
                $extension = $file->getClientOriginalExtension();

                // File upload location
                $location = 'files';

                // Upload file
                $file->move($location,$filename);

                // File path
                $filepath = url('files/'.$filename);

                $userInfo = UserInfo::where('user_id', '=', Auth::user()->id)->first();

                $userInfo->avatar = $filepath;

                $userInfo->save();

                // Response
                return response()->json([
                    'avatar' => true,
                    'message' => 'Successfully!',
                    'error' => 0,
                ]);

            }else{
                return response()->json([
                    'avatar' => true,
                    'message' => 'error',
                    'error' => 1,
                ]);
            }
        }

        return response()->json($data);
    }

    public function extendAccount(Request $request){

        if( Hash::check($request->code, session('hashed_code')) ){
            $user = User::where('id', '=', Auth::user()->id)->first();
            $user->created_at = date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s') . ' -1 day'));
            $user->save();
        }else{
            return response()->json([
                'extend' => true,
                'message' => 'Пароль введён не верно! Повторите попытку.',
                'error' => 1,
            ]);
        }

    }

    public function buy(Request $request){

        /*
            Выбираем пакет из возможных:
            1. Присваиваем тип операции
            2. Присваиваем номер пакета
            3. Присваиваем стоимость пакета
        */

        $pacage = 0;

        if( $request->pacage == 'ECONOM' ){
            $type = 2;
            $pacage = 1;
            $price = 100;
        }elseif ( $request->pacage == 'STANDARD' ) {
            $type = 3;
            $pacage = 2;
            $price = 1000;
        }elseif ( $request->pacage == 'PREMIUM' ) {
            $type = 4;
            $pacage = 3;
            $price = 10000;
        }elseif ( $request->pacage == 'VIP' ){
            $type = 11;
            $pacage = 4;
            $price = 100000;
        }

        if( $pacage == 0 ){
            // Если кто-то решил изменить инпут
            return response()->json([
                'buy' => true,
                'message' => 'Неизвестный пакет, попробуйте ещё раз!',
                'error' => 1,
            ]);
        }

        // Берём данные пользователя из таблиц

        $wallet = UserWallets::where('user_id', '=', Auth::user()->id)->first();
        $userInfo = UserInfo::where('user_id', '=', Auth::user()->id)->first();

        // Вычисляем конечную стоимость пакета, вычитая накопленные средства

        $endPrice = $price - $wallet->capital;

        if( $wallet->balance < $endPrice ){
            // Проверяем хватает ли денег на балансе
            return response()->json([
                'buy' => true,
                'message' => 'На вашем счете недостаточно средств!',
                'error' => 1,
            ]);
        }

        if( $userInfo->user_pacage >= $pacage ){
            // Проверяем на возможную активацию пакета
            return response()->json([
                'buy' => true,
                'message' => 'У вас уже активирован пакет!',
                'error' => 1,
            ]);
        }

        // Вычитаем деньги с баланса и обнуляем накопления

        $wallet->balance = $wallet->balance - $endPrice;
        $wallet->capital = 0;

        /*
            Изменяем данные пользователя:
            1. Изменяем статус на активированный
            2. Присваиваем пакет который он купил
            3. Выдаём айдишник участника
        */

        $userInfo->user_status = 1;
        $userInfo->user_pacage = $pacage;

        $operations = Operation::where('type', '=', 2)
                                ->orWhere('type', '=', 3)
                                ->orWhere('type', '=', 4)
                                ->orderBy('id', 'DESC')
                                ->get();

        if( $operations ){
            $oid = $operations->count();
        }else{
            $oid = 0;
        }

        $userPaidID = $oid + 1;

        $iter = 5 - strlen($userPaidID);
        $newUserShowID = '';

        for ($i=0; $i < $iter; $i++) {
            $newUserShowID .= '0';
        }

        $newUserShowID .= $userPaidID;

        $userInfo->user_show_id = $newUserShowID;

        // Создание операции

        Operation::create([
            'type' => $type,
            'status' => 1,
            'value' => $endPrice,
            'user_id' => Auth::user()->id,
        ]);

        // Создаём таблицу партнёров
        UserPartner::create([
            'user_id' => Auth::user()->id,
            'pacage' => $pacage,
        ]);

        // Сохранение данных пользователя
        $wallet->save();
        $userInfo->save();

        // Распределение средств

        $userID = Auth::user()->id;
        $user = User::where('id', '=', $userID)->first();
        $type = 5;

        for ($i=0; $i < 4; $i++) {

            // Проверяем на наличие спонсора
            if( !$user->sponsor_id ){
                break;
            }

            $sponsor = $user->sponsor_id;

            // Накопительный процент
            $capitalPersent = 0;

            // Если Premium пакет, накопительный процент равен 0
            if( $pacage != 3 ){
                $capitalPersent = 0.6;
            }

            // Проценты на вывод
            if( $i == 0 ){
                $outPersent = 0.4;
            }elseif ($i == 1) {
                $outPersent = 0.2;
            }elseif ($i == 2) {
                $outPersent = 0.05;
            }elseif ($i == 3) {
                $outPersent = 0.15;
            }

            $outMoney = $price * $outPersent;

            // Проверяем куплен ли у спонсора этот пакет

            $sponsorInfo = UserInfo::where('user_id', '=', $sponsor)->first();

            if( $sponsorInfo->user_pacage < $pacage ){
                break;
            }

            // Делаем начисление

            $wallet = UserWallets::where('user_id', '=', $sponsor)->first();

            $wallet->output = $wallet->output + $outMoney;

            // Для спонсора первой линии
            if( $i == 0 ){

                // Если нужено зачислить на накопительный счёт

                $wallet->capital = $wallet->capital + $price * $capitalPersent;

                // Переходы на следующий пакет
                if( $sponsorInfo->user_pacage == 1 && $wallet->capital >= 1000 ){
                    $wallet->capital = $wallet->capital - 1000;
                    $sponsorInfo->user_pacage = 2;
                    $sponsorInfo->save();
                }

                if( $sponsorInfo->user_pacage == 2 && $wallet->capital >= 10000 ){
                    $wallet->capital = 0;
                    $sponsorInfo->user_pacage = 3;
                    $sponsorInfo->save();
                }

                // Начисления на доп. кошельки

                if( $pacage == 2 ){

                    // Начисляем в автомобильную и желищьную
                    if( $wallet->autobalance < 20000 ){
                        $wallet->autobalance = $wallet->autobalance + $price * 0.1;
                    }
                    if( $wallet->housebalance < 100000 ){
                        $wallet->housebalance = $wallet->housebalance + $price * 0.2;
                    }

                }

                if( $pacage == 3 ){
                    // Начисляем в инвистиционную
                    if( $wallet->investbalance < 300000 ){
                        $wallet->investbalance = $wallet->investbalance + $price * 0.3;
                    }
                }

            }

            // Обновляем значение в таблице партнёров
            $table_line = 'user_first_line';
            if( $i == 1 ){
                $table_line = 'user_second_line';
            }elseif ($i == 2) {
                $table_line = 'user_third_line';
            }elseif ($i == 3) {
                $table_line = 'user_fourth_line';
            }

            UserPartner::where('user_id', '=', $sponsor)->increment($table_line);

            // Сохраняем балансы, создаём операцию и берём следующего спонсора

            $wallet->save();

            Operation::create([
                'type' => $type,
                'status' => 1,
                'value' => $outMoney,
                'from' => $pacage,
                'user_id' => $sponsor,
            ]);

            $user = User::where('id', '=', $sponsor)->first();

            $userID = $user->sponsor_id;

            $type++;

        }

        return response()->json([
            'buy' => true,
            'message' => 'Пакет '.$request->pacage.' активирован!',
            'error' => 0,
        ]);
    }

}
