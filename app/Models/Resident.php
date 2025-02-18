<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Resident extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'age',
        'sex',
        'address',
        'contactNumber',
        'incidentDate',
        'incidentTime',
        'admissionDate',
        'reportDate',
        'natureOfTheCrime',
        'caseStatus',
        'residentImage'
    ];
}
