<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use App\Models\Operation;
use App\Models\User;
use App\Models\UserPartner;
use Illuminate\Support\Facades\Auth;

class CabinetController extends Controller
{

    public function cabinet(){

        $operations = Operation::leftJoin('user_infos', 'user_infos.user_id', '=', 'operations.user_id')
        ->select('operations.created_at', 'operations.value', 'operations.type', 'user_infos.name', 'user_infos.surname', 'user_infos.user_show_id')
        ->where('operations.user_id', '=', Auth::user()->id)
        ->where('operations.status', '=', 1)
        ->orderBy('operations.id', 'desc')
        ->limit(10)
        ->get();

        $output = Operation::where('user_id', '=', Auth::user()->id)
        ->where('status', '=', 1)
        ->where('type', '=', 1)
        ->sum('value');

        return view('cabinet.main', compact('operations', 'output'));
    }

    public function marketing(){
        return view('cabinet.marketing');
    }

    public function settings(){
        return view('cabinet.settings');
    }

    public function deposit(){

        $operations = Operation::leftJoin('user_infos', 'user_infos.user_id', '=', 'operations.user_id')
                      ->select('operations.id', 'operations.created_at', 'operations.value', 'operations.type', 'user_infos.name', 'user_infos.surname', 'user_infos.user_show_id')
                      ->where('operations.user_id', '=', Auth::user()->id)
                      ->where('operations.status', '=', 1)
                      ->where('operations.type', '=', 0)
                      ->orderBy('operations.id', 'desc')
                      ->limit(10)
                      ->get();

        $depositSum = Operation::where('user_id', '=', Auth::user()->id)
        ->where('status', '=', 1)
        ->where('type', '=', 0)
        ->sum('value');

        $depositsCount = Operation::where('user_id', '=', Auth::user()->id)
        ->where('status', '=', 1)
        ->where('type', '=', 0)
        ->count();

        $depositeVariants = ['ePayCore'];

        return view('cabinet.deposite', compact('operations', 'depositSum', 'depositsCount', 'depositeVariants'));
    }

    public function withdraw(){
        $operations = Operation::leftJoin('user_infos', 'user_infos.user_id', '=', 'operations.user_id')
        ->select('operations.id', 'operations.created_at', 'operations.value', 'operations.type', 'user_infos.name', 'user_infos.surname', 'user_infos.user_show_id')
        ->where('operations.user_id', '=', Auth::user()->id)
        ->where('operations.status', '=', 1)
        ->where('operations.type', '=', 1)
        ->orderBy('operations.id', 'desc')
        ->limit(10)
        ->get();

        $withdrawSum = Operation::where('user_id', '=', Auth::user()->id)
        ->where('status', '=', 1)
        ->where('type', '=', 1)
        ->sum('value');

        $withdrawVariants = ['ePayCore'];

        return view('cabinet.withdraw', compact('withdrawSum', 'operations', 'withdrawVariants'));
    }

    public function story(){
        $operations = Operation::leftJoin('user_infos', 'user_infos.user_id', '=', 'operations.user_id')
                      ->select('operations.id', 'operations.created_at', 'operations.value', 'operations.type', 'user_infos.name', 'user_infos.surname', 'user_infos.user_show_id')
                      ->where('operations.user_id', '=', Auth::user()->id)
                      ->where('operations.status', '=', 1)
                      ->orderBy('operations.id', 'desc')
                      ->paginate(10);

        return view('cabinet.story', compact('operations'));
    }

    public function messages(){

        $msgs = Messages::where('to', '=', 0)->orWhere('to', '=', Auth::user()->id)->paginate(7);

        foreach ( $msgs as $msg ){
            $msgsToSave = Messages::where('id', '=', $msg->id)->first();

            if ( is_array(unserialize($msg->checked)) ){

                $checkedArray = unserialize($msg->checked);

                if( !in_array(Auth::user()->id, $checkedArray) ){
                    array_push($checkedArray, Auth::user()->id);
                    $msgsToSave->checked = serialize($checkedArray);
                }

            }else{
                $msgsToSave->checked = serialize(array(Auth::user()->id));
            }

            $msgsToSave->save();
        }

        return view('cabinet.messages', compact('msgs'));
    }

    public function bonus(){
        return view('cabinet.bonus');
    }

    public function econom(){

        $currentPacage = 1;

        if( Auth::user()->userInfo->user_pacage < $currentPacage ){
            session()->flash('warning', 'У вас не приобретён данный пакет');
            return redirect()->route('cabinet');
        }

        // Партнёры разбитые по страницам
        $partners = User::leftJoin('user_infos as ui', 'ui.user_id', '=', 'users.id')
        ->leftJoin('user_partners as up', 'up.user_id', '=', 'users.id')
        ->select('users.id', 'ui.login', 'users.email', 'ui.name', 'ui.surname', 'ui.user_show_id', 'ui.user_status', 'up.user_first_line', 'up.user_second_line', 'up.user_third_line', 'up.user_fourth_line')
        ->where('up.pacage', '=', $currentPacage)
        ->where('users.sponsor_id', '=', Auth::user()->id)
        ->paginate(9);

        $partnersInLine = UserPartner::where('user_id', '=', Auth::user()->id)
        ->where('pacage', '=', $currentPacage)
        ->first();

        // dd($partnersInLine);

        return view('cabinet.eco', compact('partners', 'partnersInLine'));
    }

    public function standard(){

        $currentPacage = 2;

        if( Auth::user()->userInfo->user_pacage < $currentPacage ){
            session()->flash('warning', 'У вас не приобретён данный пакет');
            return redirect()->route('cabinet');
        }

        // Партнёры разбитые по страницам
        $partners = User::leftJoin('user_infos as ui', 'ui.user_id', '=', 'users.id')
        ->leftJoin('user_partners as up', 'up.user_id', '=', 'users.id')
        ->select('users.id', 'ui.login', 'users.email', 'ui.name', 'ui.surname', 'ui.user_show_id', 'ui.user_status', 'up.user_first_line', 'up.user_second_line', 'up.user_third_line', 'up.user_fourth_line')
        ->where('up.pacage', '>=', $currentPacage)
        ->where('users.sponsor_id', '=', Auth::user()->id)
        ->paginate(9);

        $partnersInLine = UserPartner::where('user_id', '=', Auth::user()->id)
        ->where('pacage', '=', $currentPacage)
        ->first();

        return view('cabinet.standard', compact('partners', 'partnersInLine'));
    }

    public function premium(){

        $currentPacage = 3;

        if( Auth::user()->userInfo->user_pacage < $currentPacage ){
            session()->flash('warning', 'У вас не приобретён данный пакет');
            return redirect()->route('cabinet');
        }

        // Партнёры разбитые по страницам
        $partners = User::leftJoin('user_infos as ui', 'ui.user_id', '=', 'users.id')
        ->leftJoin('user_partners as up', 'up.user_id', '=', 'users.id')
        ->select('users.id', 'ui.login', 'users.email', 'ui.name', 'ui.surname', 'ui.user_show_id', 'ui.user_status', 'up.user_first_line', 'up.user_second_line', 'up.user_third_line', 'up.user_fourth_line')
        ->where('up.pacage', '>=', $currentPacage)
        ->where('users.sponsor_id', '=', Auth::user()->id)
        ->paginate(9);

        $partnersInLine = UserPartner::where('user_id', '=', Auth::user()->id)
        ->where('pacage', '=', $currentPacage)
        ->first();

        return view('cabinet.premium', compact('partners', 'partnersInLine'));
    }

    public function vip(){

        $currentPacage = 4;

        if( Auth::user()->userInfo->user_pacage < $currentPacage ){
            session()->flash('warning', 'У вас не приобретён данный пакет');
            return redirect()->route('cabinet');
        }

        // Партнёры разбитые по страницам
        $partners = User::leftJoin('user_infos as ui', 'ui.user_id', '=', 'users.id')
        ->leftJoin('user_partners as up', 'up.user_id', '=', 'users.id')
        ->select('users.id', 'ui.login', 'users.email', 'ui.name', 'ui.surname', 'ui.user_show_id', 'ui.user_status', 'up.user_first_line', 'up.user_second_line', 'up.user_third_line', 'up.user_fourth_line')
        ->where('up.pacage', '>=', $currentPacage)
        ->where('users.sponsor_id', '=', Auth::user()->id)
        ->paginate(9);

        $partnersInLine = UserPartner::where('user_id', '=', Auth::user()->id)
        ->where('pacage', '=', $currentPacage)
        ->first();

        return view('cabinet.vip', compact('partners', 'partnersInLine'));
    }

    public function partners(){

        $partners = User::leftJoin('user_infos as ui', 'ui.user_id', '=', 'users.id')
        ->where('user_pacage', '>', '0')
        ->where('sponsor_id', '=', Auth::user()->id)
        ->count();

        $registers = User::where('sponsor_id', '=', Auth::user()->id)->count();

        // Партнёры разбитые по страницам
        $economPartners = User::leftJoin('user_infos as ui', 'ui.user_id', '=', 'users.id')
        ->select('users.id', 'ui.name', 'ui.surname', 'ui.user_show_id', 'ui.user_status')
        ->where('users.sponsor_id', '=', Auth::user()->id)
        ->where('ui.user_pacage', '>=', 1)
        ->get();

        $economPartners->map(function ($item, $key) {

            $itemPartner = User::leftJoin('user_infos as ui', 'ui.user_id', '=', 'users.id')
            ->select('users.id', 'ui.name', 'ui.surname', 'ui.user_show_id', 'ui.user_status')
            ->where('users.sponsor_id', '=', $item->id)
            ->where('ui.user_pacage', '>=', 1)
            ->get();

            $itemPartner->map(function ($ite){
                $itePartner = User::leftJoin('user_infos as ui', 'ui.user_id', '=', 'users.id')
                ->select('users.id', 'ui.name', 'ui.surname', 'ui.user_show_id', 'ui.user_status')
                ->where('users.sponsor_id', '=', $ite->id)
                ->where('ui.user_pacage', '>=', 1)
                ->get();

                $itePartner->map(function ($it){
                    $itPartner = User::leftJoin('user_infos as ui', 'ui.user_id', '=', 'users.id')
                    ->select('users.id', 'ui.name', 'ui.surname', 'ui.user_show_id', 'ui.user_status')
                    ->where('users.sponsor_id', '=', $it->id)
                    ->where('ui.user_pacage', '>=', 1)
                    ->get();

                    $itPartner->map(function ($i){
                        $iPartner = User::leftJoin('user_infos as ui', 'ui.user_id', '=', 'users.id')
                        ->select('users.id', 'ui.name', 'ui.surname', 'ui.user_show_id', 'ui.user_status')
                        ->where('users.sponsor_id', '=', $i->id)
                        ->where('ui.user_pacage', '>=', 1)
                        ->get();

                        return $i->folp = $iPartner;
                    });

                    return $it->freelp = $itPartner;
                });

                return $ite->slp = $itePartner;
            });

            return $item->flp = $itemPartner;

        });

        $standartPartners = User::leftJoin('user_infos as ui', 'ui.user_id', '=', 'users.id')
        ->select('users.id', 'ui.name', 'ui.surname', 'ui.user_show_id', 'ui.user_status')
        ->where('users.sponsor_id', '=', Auth::user()->id)
        ->where('ui.user_pacage', '>=', 2)
        ->get();

        $standartPartners->map(function ($item, $key) {

            $itemPartner = User::leftJoin('user_infos as ui', 'ui.user_id', '=', 'users.id')
            ->select('users.id', 'ui.name', 'ui.surname', 'ui.user_show_id', 'ui.user_status')
            ->where('users.sponsor_id', '=', $item->id)
            ->where('ui.user_pacage', '>=', 2)
            ->get();

            $itemPartner->map(function ($ite){
                $itePartner = User::leftJoin('user_infos as ui', 'ui.user_id', '=', 'users.id')
                ->select('users.id', 'ui.name', 'ui.surname', 'ui.user_show_id', 'ui.user_status')
                ->where('users.sponsor_id', '=', $ite->id)
                ->where('ui.user_pacage', '>=', 2)
                ->get();

                $itePartner->map(function ($it){
                    $itPartner = User::leftJoin('user_infos as ui', 'ui.user_id', '=', 'users.id')
                    ->select('users.id', 'ui.name', 'ui.surname', 'ui.user_show_id', 'ui.user_status')
                    ->where('users.sponsor_id', '=', $it->id)
                    ->where('ui.user_pacage', '>=', 2)
                    ->get();

                    $itPartner->map(function ($i){
                        $iPartner = User::leftJoin('user_infos as ui', 'ui.user_id', '=', 'users.id')
                        ->select('users.id', 'ui.name', 'ui.surname', 'ui.user_show_id', 'ui.user_status')
                        ->where('users.sponsor_id', '=', $i->id)
                        ->where('ui.user_pacage', '>=', 2)
                        ->get();

                        return $i->folp = $iPartner;
                    });

                    return $it->freelp = $itPartner;
                });

                return $ite->slp = $itePartner;
            });

            return $item->flp = $itemPartner;

        });

        $premiumPartners = User::leftJoin('user_infos as ui', 'ui.user_id', '=', 'users.id')
        ->select('users.id', 'ui.name', 'ui.surname', 'ui.user_show_id', 'ui.user_status')
        ->where('users.sponsor_id', '=', Auth::user()->id)
        ->where('ui.user_pacage', '>=', 3)
        ->get();

        $premiumPartners->map(function ($item, $key) {

            $itemPartner = User::leftJoin('user_infos as ui', 'ui.user_id', '=', 'users.id')
            ->select('users.id', 'ui.name', 'ui.surname', 'ui.user_show_id', 'ui.user_status')
            ->where('users.sponsor_id', '=', $item->id)
            ->where('ui.user_pacage', '>=', 3)
            ->get();

            $itemPartner->map(function ($ite){
                $itePartner = User::leftJoin('user_infos as ui', 'ui.user_id', '=', 'users.id')
                ->select('users.id', 'ui.name', 'ui.surname', 'ui.user_show_id', 'ui.user_status')
                ->where('users.sponsor_id', '=', $ite->id)
                ->where('ui.user_pacage', '>=', 3)
                ->get();

                $itePartner->map(function ($it){
                    $itPartner = User::leftJoin('user_infos as ui', 'ui.user_id', '=', 'users.id')
                    ->select('users.id', 'ui.name', 'ui.surname', 'ui.user_show_id', 'ui.user_status')
                    ->where('users.sponsor_id', '=', $it->id)
                    ->where('ui.user_pacage', '>=', 3)
                    ->get();

                    $itPartner->map(function ($i){
                        $iPartner = User::leftJoin('user_infos as ui', 'ui.user_id', '=', 'users.id')
                        ->select('users.id', 'ui.name', 'ui.surname', 'ui.user_show_id', 'ui.user_status')
                        ->where('users.sponsor_id', '=', $i->id)
                        ->where('ui.user_pacage', '>=', 3)
                        ->get();

                        return $i->folp = $iPartner;
                    });

                    return $it->freelp = $itPartner;
                });

                return $ite->slp = $itePartner;
            });

            return $item->flp = $itemPartner;

        });

        $vipPartners = User::leftJoin('user_infos as ui', 'ui.user_id', '=', 'users.id')
        ->select('users.id', 'ui.name', 'ui.surname', 'ui.user_show_id', 'ui.user_status')
        ->where('users.sponsor_id', '=', Auth::user()->id)
        ->where('ui.user_pacage', '=', 4)
        ->get();

        $vipPartners->map(function ($item, $key) {

            $itemPartner = User::leftJoin('user_infos as ui', 'ui.user_id', '=', 'users.id')
            ->select('users.id', 'ui.name', 'ui.surname', 'ui.user_show_id', 'ui.user_status')
            ->where('users.sponsor_id', '=', $item->id)
            ->where('ui.user_pacage', '=', 4)
            ->get();

            $itemPartner->map(function ($ite){
                $itePartner = User::leftJoin('user_infos as ui', 'ui.user_id', '=', 'users.id')
                ->select('users.id', 'ui.name', 'ui.surname', 'ui.user_show_id', 'ui.user_status')
                ->where('users.sponsor_id', '=', $ite->id)
                ->where('ui.user_pacage', '=', 4)
                ->get();

                $itePartner->map(function ($it){
                    $itPartner = User::leftJoin('user_infos as ui', 'ui.user_id', '=', 'users.id')
                    ->select('users.id', 'ui.name', 'ui.surname', 'ui.user_show_id', 'ui.user_status')
                    ->where('users.sponsor_id', '=', $it->id)
                    ->where('ui.user_pacage', '=', 4)
                    ->get();

                    $itPartner->map(function ($i){
                        $iPartner = User::leftJoin('user_infos as ui', 'ui.user_id', '=', 'users.id')
                        ->select('users.id', 'ui.name', 'ui.surname', 'ui.user_show_id', 'ui.user_status')
                        ->where('users.sponsor_id', '=', $i->id)
                        ->where('ui.user_pacage', '=', 4)
                        ->get();

                        return $i->folp = $iPartner;
                    });

                    return $it->freelp = $itPartner;
                });

                return $ite->slp = $itePartner;
            });

            return $item->flp = $itemPartner;

        });


        return view('cabinet.partners', compact('partners', 'registers', 'economPartners', 'standartPartners', 'premiumPartners', 'vipPartners'));
    }

    public function promo(){
        return view(('cabinet.promo'));
    }

    public function previewEmail()
    {
        return view('mail.emailConfirm');
    }
}
