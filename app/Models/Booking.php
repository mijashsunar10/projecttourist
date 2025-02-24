<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'name',
        'email',
        'country',
        'phone',
        'passport_no',
        'entity_type',
        'entity_id',
        'date',
        'message',
        'people',
        'is_read'
    ];
    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }

    public function mountain()
    {
        return $this->belongsTo(Mountain::class);
    } 

    public function tourtrip() {
        return $this->belongsTo(Tourtrips::class.'tourtrip_id');
    }
}
