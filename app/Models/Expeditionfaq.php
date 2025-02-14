<?php

namespace App\Models;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Model;

class Expeditionfaq extends Model
{
    
    protected $fillable = ['mountain_id', 'question', 'answer', 'slug'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($tourfaq) {
            $tourfaq->slug = Str::slug($tourfaq->question . '-' . time());
        });
    }

    public function mountain()
    {
        return $this->belongsTo(Mountain::class, 'mountain_id');
    }
}
