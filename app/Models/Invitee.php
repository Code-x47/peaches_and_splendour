<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invitee extends Model
{
       protected $fillable = [
        'name',
        'email',
        'phone'
    ];

}
