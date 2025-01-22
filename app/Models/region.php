<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class region extends Model
{
    protected $fillable = ['name', 'image', 'trips_count'];
}
