<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExpeditionImage extends Model
{
    protected $fillable = ['mountain_id', 'image'];

    public function mountain()
    {
        return $this->belongsTo(Mountain::class);
    }
}
