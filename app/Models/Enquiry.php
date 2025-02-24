<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $fillable = [
        'trip_id',
        'name',
        'email',
        'phone',
        'country',
        'message',
        'is_read'
    ];
    
    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }
}