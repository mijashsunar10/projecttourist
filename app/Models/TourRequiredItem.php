<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TourRequiredItem extends Model
{
    protected $fillable = ['tourtrip_id', 'item_name'];

    public function tourtrip() {
        return $this->belongsTo(Tourtrips::class,'tourtrip_id');
    }
}
