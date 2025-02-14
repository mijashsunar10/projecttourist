<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExpeditionInclusionExclusion extends Model
{
    protected $fillable = ['mountain_id', 'type', 'description'];
    public function mountain() {
        return $this->belongsTo(Mountain::class.'mountain_id');
    }
}

