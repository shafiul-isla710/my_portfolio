<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = ['title', 'short_desc', 'image'];

    // scope to get only active sliders
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
