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
    
}
