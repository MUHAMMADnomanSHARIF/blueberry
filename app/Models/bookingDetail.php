<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookingDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'phoneNumber',
        'email',
        'noPassenger',
        'noSuitcase',
        'flightNumber',
        'nameBoard',
        'additionalrequirments',
        'carname',
        'fare',
        'pickTime',
        'pickDate',
    ];
}
