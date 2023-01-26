<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'phone',
        'birth',
        'sex',
        'country',
        'city',
        'avatar',
        'user_id',
        'user_show_id',
        'user_status',
        'login',
    ];

}
