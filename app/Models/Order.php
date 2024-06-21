<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'userid',
        'status',
        'FundType',
        'currencytb',
        'amountb',
        'currencyts',
        'amountts',
        'targetp',
        'underlying',
        'country',
        'grade',
        'buysell',
        'quantity',
        'unit',
        'filled',
        'Incoterm',
        'details'
    ];
}
