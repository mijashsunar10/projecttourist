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
        'trip_id',
        'date',
        'message',
        'people',
        'is_read'
    ];
    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }
}
