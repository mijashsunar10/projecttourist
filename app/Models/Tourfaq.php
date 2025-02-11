<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tourfaq extends Model
{
    protected $fillable = ['tourtrip_id', 'question', 'answer', 'slug'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($tourfaq) {
            $tourfaq->slug = Str::slug($tourfaq->question . '-' . time());
        });
    }

    public function tourtrip()
    {
        return $this->belongsTo(Tourtrips::class, 'tourtrip_id');
    }
}
