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

}
