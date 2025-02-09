<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequiredItem extends Model
{
    protected $fillable = ['trip_id', 'item_name'];

    public function trip() {
        return $this->belongsTo(Trip::class);
    }
}
