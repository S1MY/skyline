<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'status',
        'value',
        'system',
        'user_id',
    ];

    public static function getCurrentDate($date){

        $explodDate = explode(' ', $date);

        $date = $explodDate[0];
        $time = $explodDate[1];

        $day = explode('-', $date )[2];

        $month = explode('-', $date )[1];

        switch ($month) {
            case 1:
                $monthName = __('month.jun');
                break;
            case 2:
                $monthName = __('month.feb');
                break;
            case 3:
                $monthName = __('month.mar');
                break;
            case 4:
                $monthName = __('month.apr');
                break;
            case 5:
                $monthName = __('month.may');
                break;
            case 6:
                $monthName = __('month.jun');
                break;
            case 7:
                $monthName = __('month.jul');
                break;
            case 8:
                $monthName = __('month.aug');
                break;
            case 9:
                $monthName = __('month.sep');
                break;
            case 10:
                $monthName = __('month.oct');
                break;
            case 11:
                $monthName = __('month.nov');
                break;
            case 12:
                $monthName = __('month.dec');
                break;

        }

        $currentDate = $day.' '. $monthName.' '.__('month.in').' '.$time;

        return $currentDate;

    }

}
