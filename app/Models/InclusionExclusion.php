<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InclusionExclusion extends Model
{
    protected $fillable = ['trip_id', 'type', 'description'];
    public function trip() {
        return $this->belongsTo(Trip::class);
    }
}
