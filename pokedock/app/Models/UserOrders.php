<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserOrders extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'state_order',
        'state_date',
    ];

    public function user()
    {
        return $this->belongsTo(Users::class, 'id_user', 'id_user');
    }    

    protected $hidden = [
    ];

    protected $casts = [
        'state_order' => 'string',
        'state_date' => 'date',
    ];

    public $timestamps = false;
}