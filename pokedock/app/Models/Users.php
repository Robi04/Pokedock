<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Users extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'password',
        'username', 
        'credit',
        'fidelity_point',
        'email',
    ];

    protected $hidden = [
        'password_user',
    ];

    protected $casts = [
        'credit_user' => 'integer',
        'fidelity_point_user' => 'integer',
    ];

    public function userOrders()
    {
        return $this->hasMany(UserOrders::class, 'id');
    }

}
