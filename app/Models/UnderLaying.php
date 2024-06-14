<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnderLaying extends Model
{
    use HasFactory;
    protected $fillable = [
        'Type',
        'underlaying'
    ];
}
