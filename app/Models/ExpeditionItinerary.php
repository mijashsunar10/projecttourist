<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ExpeditionItinerary extends Model
{
    //
    protected $fillable = ['mountain_id', 'question', 'answer', 'slug'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($itinerary) {
            $itinerary->slug = Str::slug($itinerary->question . '-' . time());
        });
    }

    public function mountain()
    {
        return $this->belongsTo(Mountain::class);
    }
}
