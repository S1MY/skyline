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
                $monthName = 'января';
                break;
            case 2:
                $monthName = 'февраля';
                break;
            case 3:
                $monthName = 'марта';
                break;
            case 4:
                $monthName = 'апреля';
                break;
            case 5:
                $monthName = 'мая';
                break;
            case 6:
                $monthName = 'июня';
                break;
            case 7:
                $monthName = 'июля';
                break;
            case 8:
                $monthName = 'августа';
                break;
            case 9:
                $monthName = 'сенятбря';
                break;
            case 10:
                $monthName = 'октября';
                break;
            case 11:
                $monthName = 'ноября';
                break;
            case 12:
                $monthName = 'декабря';
                break;

        }

        $currentDate = $day.' '. $monthName.' в '.$time;

        return $currentDate;

    }

}
