<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'fname',
        'email',
        'phone',
        'username',
        'password',
        'city',
        'role',
        'country',
        'in_fullname',
        'in_position',
        'in_email',
        'in_phone',
        'legalname',
        'tradingname',
        'regNmber',
        'regDate',
        'vat',
        'companylink',
        'corWeb',
        'companyEmail',
        'directors',
        'emp',
        'incorporationCountry',
        'regAdd',
        'regState',
        'regPostCode',
        'opCountry',
        'opAdd',
        'opCity',
        'opState',
        'opPostCode',
        'industry',
        'serviceDes',
        'salesChannel',
        'webURL1',
        'webURL2',
        'webURL3',
        'other',
        'businessYears',
        'licence',
        'regAuthority',
        'regAuthCountry',
        'regAuthNmbr',
        'refName',
        'refDetails',
        'idFile',
        'billFile',
        'incorporationFile',
        'memorandumFile',
        'resolutionFile',
        'confirm1',
        'confirm1Details',
        'confirm2',
        'confirm2Details',
        'sign',
        'position',
        'dateAndPlace',
        'status',
    ];

    
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
