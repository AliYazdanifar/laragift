<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gift extends Model
{
    use HasFactory;

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'gift_categories', 'gift_id', 'category_id');
    }

    public function interests()
    {
        return $this->belongsToMany(Interest::class, 'gift_interests', 'gift_id', 'interest_id');
    }

    public function occasions()
    {
        return $this->belongsToMany(Occasion::class, 'gift_occasions', 'gift_id', 'occasion_id');
    }
}
