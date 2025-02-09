<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TourImage extends Model
{
    //
    protected $fillable = ['tourtrip_id', 'image'];

    public function tourtrip()
    {
        return $this->belongsTo(Tourtrips::class,'tourtrip_id');
    }
}
