<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'total_videos',
    ];
}
