<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Tour extends Model
{
    protected $fillable = ['name', 'image', 'tours_count'];

    public function tourtrips()
 {
     return $this->hasMany(Tourtrips::class);
 }
}
