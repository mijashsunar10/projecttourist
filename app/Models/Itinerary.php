<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Itinerary extends Model
{
    protected $fillable = ['trip_id', 'question', 'answer', 'slug'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($itinerary) {
            $itinerary->slug = Str::slug($itinerary->question . '-' . time());
        });
    }

    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }
}
