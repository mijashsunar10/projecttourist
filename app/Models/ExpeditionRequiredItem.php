<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExpeditionRequiredItem extends Model
{
    protected $fillable = ['mountain_id', 'item_name'];

    public function mountain() {
        return $this->belongsTo(Mountain::class,'mountain_id');
    }
}
