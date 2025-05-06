<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Occasion extends Model
{
    use HasFactory;

    public function gifts()
    {
        return $this->belongsToMany(Gift::class, 'gift_occasion', 'occasion_id', 'gift_id');
    }
}
