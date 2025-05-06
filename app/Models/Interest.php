<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    use HasFactory;

    public function gifts()
    {
        return $this->belongsToMany(Gift::class, 'gift_interest', 'interest_id', 'gift_id');
    }
}
