<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Officer extends Model
{
    protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'age',
        'dateOfBirth',
        'address',
        'civilStatus',
        'contactNumber',
        'officePosition',
        'dateAssumed',  
    ];

}
