<?php

namespace App\Http\Controllers;

use App\Models\BonusProgram;
use App\Models\Messages;
use Illuminate\Http\Request;
use App\Models\Operation;
use App\Models\User;
use App\Models\UserInfo;
use App\Models\UserPartner;
use App\Models\UserWallets;
use Carbon\Carbon;
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

            Messages::create([
                'message' => 'Доступ к аккаунту восстановлен! У вас будет <span class="_bold">24 часа</span>, чтобы приобрести пакет.',
                'en_message' => 'Account access has been restored! You will have <span class="_bold">24 hours</span> to purchase the package.',
                'de_message' => 'Der Zugriff auf das Konto wurde wiederhergestellt! Sie haben <span class="_bold">24 Stunden</span>, um das Paket zu kaufen.',
                'checked' => serialize(array()),
                'from' => 0,
                'to' => Auth::user()->id,
            ]);

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


        // Бонусные программы
        $user = User::where('id', '=', Auth::user()->id)->first();
        $sponsor = $user->sponsor_id;

        if( $type == 2 ){
            // Смотрим получил ли спонсор этот бонус
            $bonusChecker = BonusProgram::where('program_name', '=', 'Bonus "Start"')->where('user_id', '=', $sponsor)->count();

            if( $bonusChecker == 0 ){
                // Ещё не получал, считаем приглашённых за 6 месяцев
                $refererCountChecker = User::leftJoin('user_infos as ui', 'ui.user_id', '=', 'users.id')
                                    ->where('sponsor_id', '=', $sponsor)
                                    ->where('user_status', '>', 0)
                                    ->whereBetween('users.created_at',
                                        [Carbon::now()->subMonth(6), Carbon::now()]
                                    )
                                    ->count();

                if( $refererCountChecker >= 19 ){
                    // Присваиваем бонус
                    BonusProgram::create([
                        'program_name' => 'Bonus "Start"',
                        'user_id' => $sponsor,
                    ]);

                    // Отправляем сообщение
                    Messages::create([
                        'message' => 'Поздравляем! Вам начислен <span class="_bold">Bonus "Start"</span>.',
                        'en_message' => 'Congratulations! You have been awarded the <span class="_bold">Bonus "Start"</span>.',
                        'de_message' => 'Herzlichen Glückwunsch! Ihnen wird ein <span class="_bold">Bonus "Start"</span> gutgeschrieben.',
                        'checked' => serialize(array()),
                        'from' => 0,
                        'to' => $sponsor,
                    ]);

                    // Обновляем баланс

                    $sponsorWallet = UserWallets::where('user_id', '=', $sponsor)->get();
                    $sponsorWallet->output = $sponsorWallet->output + 200;
                    $sponsorWallet->save();

                }
            }
        }

        // return 1;

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
        if( $pacage > 1 ){
            for ($i=1; $i <= $pacage; $i++) {
                UserPartner::create([
                    'user_id' => Auth::user()->id,
                    'pacage' => $i,
                ]);
            }
        }else{
            UserPartner::create([
                'user_id' => Auth::user()->id,
                'pacage' => $pacage,
            ]);
        }


        // Создание сообщения

        Messages::create([
            'message' => 'Поздравляем! Вы успешно перешли на пакет <span class="_bold">"'.$request->pacage.'"</span>. В скором времени вам откроются новые функции, которые многократно увеличат ваш заработок!',
            'en_message' => 'Congratulations! You have successfully switched to the package <span class="_bold">"'.$request->package.'"</span>. Soon you will discover new features that will multiply your earnings!',
            'de_message' => 'Herzlichen Glückwunsch! Sie haben erfolgreich zum Paket <span class="_bold">"'.$request->package.'"</span>. Bald werden Sie neue Funktionen entdecken, die Ihr Einkommen um ein Vielfaches erhöhen werden!',
            'checked' => serialize(array()),
            'from' => 0,
            'to' => Auth::user()->id,
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
            $capitalPersent = 0.6;

            // Проценты на вывод
            $outPersent = 0.4;

            $outMoney = $price * $outPersent;

            // Проверяем куплен ли у спонсора этот пакет

            $sponsorInfo = UserInfo::where('user_id', '=', $sponsor)->first();

            if( $sponsorInfo->user_pacage < $pacage ){
                break;
            }

            // Делаем начисление

            $wallet = UserWallets::where('user_id', '=', $sponsor)->first();
            if( $pacage > 1 ){
                $outMoney = 0;

                for ($io=1; $io <= $pacage ; $io++) {

                    if( $io == 1 ){
                        $priceO = 100;
                    }elseif ($io == 2) {
                        $priceO = 1000;
                    }elseif ($io == 3) {
                        $priceO = 10000;
                    }elseif ($io == 4) {
                        $priceO = 100000;
                    }

                    $outMoney = $outMoney + ($priceO * $outPersent);

                }

                $wallet->output = $wallet->output + $outMoney;
            }else{
                $wallet->output = $wallet->output + $outMoney;
            }


            // Для спонсора первой линии
            if( $i == 0 ){

                // Если нужено зачислить на накопительный счёт

                if( $pacage > 1 ){
                    $capiMoney = 0;

                    for ($io=1; $io <= $pacage ; $io++) {

                        if( $io == 1 ){
                            $priceO = 100;
                        }elseif ($io == 2) {
                            $priceO = 1000;
                        }elseif ($io == 3) {
                            $priceO = 10000;
                        }elseif ($io == 4) {
                            $priceO = 100000;
                        }

                        $capiMoney = $capiMoney + ($priceO * $capitalPersent);

                    }

                    $wallet->capital = $wallet->capital + $capiMoney;
                }else{
                    $wallet->capital = $wallet->capital + $price * $capitalPersent;
                }

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

            if( $pacage > 1 ){
                for ($i=$pacage; $i > 0; $i--) {
                    UserPartner::where('user_id', '=', $sponsor)->where('pacage', '=', $i)->increment($table_line);
                }
            }else{
                UserPartner::where('user_id', '=', $sponsor)->where('pacage', '=', $pacage)->increment($table_line);
            }


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

    public function sendMessage(Request $request){

        Messages::create([
            'message' => $request->msg_ru,
            'en_message' => $request->msg_en,
            'de_message' => $request->msg_ge,
            'checked' => serialize(array()),
            'from' => 1,
            'to' => 0,
        ]);

        return $request;
    }

    public function createNewPassword(Request $request){

        $id = $request->id;

        $user = User::where('id', '=', $id)->first();

        if( !$user ){
            return response()->json([
                'updated' => true,
                'message' => 'Не удалось найти данного пользователя.',
                'error' => 1,
            ]);
        }

        $password = $request->password;
        $password_confirmation = $request->password_confirmation;

        if( $password != $password_confirmation ){
            return response()->json([
                'updated' => true,
                'message' => 'Введённые вами пароли не совпадают.',
                'error' => 1,
            ]);
        }

        $user->password = Hash::make($password);
        $user->save();

        Auth::login($user);

        return response()->json([
            'updated' => true,
            'redirect' => route('cabinet'),
            'error' => 0,
        ]);

    }

}
