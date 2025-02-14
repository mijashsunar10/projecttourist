<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExpeditionHighlight extends Model
{
    protected $fillable = ['mountain_id', 'highlight'];

    public function mountain()
    {
        return $this->belongsTo(Mountain::class);
    }
}
