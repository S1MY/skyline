<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserWallets extends Model
{
    use HasFactory;

    protected $fillable = [
        'balance',
        'output',
        'autobalance',
        'housebalance',
        'investbalance',
        'user_id',
    ];
}
