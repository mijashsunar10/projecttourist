<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Tripfaq extends Model
{
    protected $fillable = ['trip_id', 'question', 'answer', 'slug'];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($tripfaq) {
            $tripfaq->slug = Str::slug($tripfaq->question . '-' . time());
        });
    }
    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }
}
