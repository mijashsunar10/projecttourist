<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'trip_id', 'name', 'email', 'photo', 'youtube_url', 'rating', 'review'
    ];

    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }

}
