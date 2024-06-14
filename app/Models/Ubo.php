<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubo extends Model
{
    use HasFactory;
    protected $fillable = [
        'userid',
        'uboName',
        'uboCountry',
        'uboAddress',
        'uboCity',
        'uboPostcode',
        'uboDOB',
        'uboPassport',
        'uboExp',
        'uboNationality',
        'uboShare',
    ];
}
