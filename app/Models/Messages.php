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

        $date = date('d.m.Y', strtotime($explodDate[0]));
        $time = date('H:i', strtotime($explodDate[1]));

        $currentDate = $date.' '.__('month.in').' '.$time;

        return $currentDate;

    }
}
