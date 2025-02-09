<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Trip extends Model
{
    protected $fillable = ['region_id', 'name', 'description', 'price', 'duration', 'distance', 'ascent','image'];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function images()
    {
        return $this->hasMany(TripImage::class);
    }

    public function highlights()
    {
        return $this->hasMany(TripHighlight::class);
    }

    public function itineraries()
    {
        return $this->hasMany(Itinerary::class);
    }

    public function tripfacts()
    {
        return $this->hasMany(TripFact::class);
    }
        public function requiredItems()
    {
        return $this->hasMany(RequiredItem::class);
    }
    
    
    
}
