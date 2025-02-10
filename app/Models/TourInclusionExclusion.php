<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TourInclusionExclusion extends Model
{
    protected $fillable = ['tourtrip_id', 'type', 'description'];
    public function tourtrip() {
        return $this->belongsTo(Tourtrips::class.'tourtrip_id');
    }
}
