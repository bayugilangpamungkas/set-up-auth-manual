<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Verification extends Model
{
    protected $fillable = [
        'user_id',
        'unique_id',
        'otp',
        'type',
        'send_via'
    ];
}
