<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
        'en_message',
        'de_message',
        'checked',
        'from',
        'to',
    ];

    public static function getCurrentDate($date){

        $explodDate = explode(' ', $date);

        $date = $explodDate[0];
        $time = $explodDate[1];

        $currentDate = $date.' '.__('month.in').' '.$time;

        return $currentDate;

    }
}
