<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TripFact extends Model
{
    protected $fillable = [
        'trip_id', 'duration', 'difficulty', 'start_end', 'best_season',
        'area', 'max_elevation', 'per_day_walk', 'group_size', 'accommodation'
    ];

    public function trip() {
        return $this->belongsTo(Trip::class);
    }
}

