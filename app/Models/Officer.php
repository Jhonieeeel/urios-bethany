<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;


// spatie
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;


class Officer extends Model
{

    use HasFactory, Notifiable, LogsActivity;

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
        'officerImage'
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->setDescriptionForEvent(fn(string $eventName) => "Admin {$eventName} officer information");
    }
}
