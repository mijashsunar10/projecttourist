<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TourHighlight extends Model
{
    protected $fillable = ['tourtrip_id', 'highlight'];
    public function tourtrip()
    {
        return $this->belongsTo(Tourtrips::class);
    }
}
