<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class region extends Model
{
    protected $fillable = ['name', 'image', 'trips_count'];

    
 public function trips()
 {
     return $this->hasMany(Trip::class);
 }

}


