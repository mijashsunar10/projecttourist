<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $fillable = [
      
        'name',
        'email',
        'phone',
        'country',
        'entity_id',
        'entity_type',
        'message',
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