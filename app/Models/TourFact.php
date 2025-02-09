<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TourFact extends Model
{
    protected $fillable = [
        'tourtrip_id', 'duration', 'difficulty', 'start_end', 'best_season',
        'area', 'max_elevation', 'per_day_walk', 'group_size', 'accommodation'
    ];

    public function tourtrip() {
        return $this->belongsTo(Tourtrips::class,'tourtrip_id');
    }
}
