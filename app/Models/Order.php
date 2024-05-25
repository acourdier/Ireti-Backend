<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'userid',
        'selectOption',
        'currencytb',
        'amountb',
        'currencys',
        'amounts',
        'targetp',
        'underlying',
        'country',
        'grade',
        'cell',
        'quantity',
        'unit',
        'targetpu',
        'Incoterm',
        'details'
    ];
}
