<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
    use HasFactory;

    protected $fillable = [
        'carModel',
        'serviceType',
        'carIssue',
        'appointmentDate',
        'appointmentTime',
        'plateNumber',
        'additionalNotes',
        'user_id', // Keep track of the user who booked
        'status', // Add the status field here
    ];
}

