<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function gifts()
    {
        return $this->belongsToMany(Gift::class, 'gift_category', 'category_id', 'gift_id');
    }
}
