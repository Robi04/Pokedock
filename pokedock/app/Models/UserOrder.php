<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'state_order',
        'state_date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    protected $hidden = [
    ];

    protected $casts = [
        'state_order' => 'integer',
        'state_date' => 'date',
    ];
}