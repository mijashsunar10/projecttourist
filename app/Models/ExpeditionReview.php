<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExpeditionReview extends Model
{
    
    protected $fillable = [
        'mountain_id', 'name', 'email', 'photo', 'youtube_url', 'rating', 'review'
    ];

    public function mountain()
    {
        return $this->belongsTo(Mountain::class);
    }
}
