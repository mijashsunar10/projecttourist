<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class TourItinerary extends Model
{
    //
    protected $fillable = ['tourtrip_id', 'question', 'answer', 'slug'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($itinerary) {
            $itinerary->slug = Str::slug($itinerary->question . '-' . time());
        });
    }

    public function tourtrip()
    {
        return $this->belongsTo(Tourtrips::class, 'tourtrip_id');
    }
}
