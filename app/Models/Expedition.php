<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expedition extends Model
{
    protected $fillable = ['name', 'image', 'trips_count'];

    public function mountains()
    {
        return $this->hasMany(Mountain::class);
    }
    
}
