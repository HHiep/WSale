<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Account extends Authenticatable 
{
    use HasFactory, Notifiable;
    const ROLE = [
        'user' => 0,
        'admin' => 9
    ];
    protected $table = 'accounts';

    protected $fillable = [
        'code',
        'mail_adr',
        'password',
        'full_name',
        'role_id',
        'phone',
        'date_of_birth',
        'address',
        'token',
        'expired_date'
    ];
}
