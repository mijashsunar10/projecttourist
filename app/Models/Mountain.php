<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mountain extends Model
{
    protected $fillable = ['expedition_id', 'name', 'description', 'price', 'duration', 'distance', 'ascent','image'];

    public function expedition()
    {
        return $this->belongsTo(Expedition::class);
    }
    public function images()
    {
        return $this->hasMany(ExpeditionImage::class);
    }
    public function mountainfacts()
    {
        return $this->hasOne(ExpeditionFact::class);
    }

    public function mountainhighlights()
    {
        return $this->hasMany(ExpeditionHighlight::class,'mountain_id');
    }

    public function itineraries()
    {
        return $this->hasMany(ExpeditionItinerary::class,'mountain_id');
    }

    public function expeditioninclusionExclusions()
    {
        return $this->hasMany(ExpeditionInclusionExclusion::class,'mountain_id');
    }
    public function mountainrequiredItems()
    {
        return $this->hasMany(ExpeditionRequiredItem::class,'mountain_id');
    }







}
