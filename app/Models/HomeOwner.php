<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeOwner extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'email',
        'phone',
        'address',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
