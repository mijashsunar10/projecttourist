<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TourReview extends Model
{
    protected $fillable = [
        'tourtrip_id', 'name', 'email', 'photo', 'youtube_url', 'rating', 'review'
    ];

    public function tourtrip()
    {
        return $this->belongsTo(Tourtrips::class);
    }
}
