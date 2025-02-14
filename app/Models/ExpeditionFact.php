<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExpeditionFact extends Model
{
    protected $fillable = [
        'mountain_id', 'duration', 'difficulty', 'start_end', 'best_season',
        'area', 'max_elevation', 'per_day_walk', 'group_size', 'accommodation'
    ];

    public function mountain() {
        return $this->belongsTo(Mountain::class);
    }
}
