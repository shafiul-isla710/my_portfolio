<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $guarded = ['created_at','updated_at'];


    public static function freelance()
    {
        return [
            'Available',
            'Not Available',
        ];
    }
}
