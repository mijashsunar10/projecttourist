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
    public function images()
    {
        return $this->hasMany(TourImage::class, 'tourtrip_id');
    }
    public function tourfacts()
    {
        return $this->hasMany(TourFact::class,'tourtrip_id');
    }
    public function tourhighlights()
    {
        return $this->hasMany(TourHighlight::class,'tourtrip_id');
    }
    public function itineraries()
    {
        return $this->hasMany(TourItinerary::class,'tourtrip_id');
    }
}
