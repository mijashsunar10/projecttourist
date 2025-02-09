<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tourtrips extends Model
{
    protected $fillable = ['tour_id', 'name', 'description', 'price', 'duration', 'distance', 'ascent','image'];

    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }
}
