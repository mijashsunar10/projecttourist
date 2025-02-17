<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customize extends Model
{
    protected $fillable = [
        'name', 'email','country', 'phone','trek_name', 'region','no_of_people','budget','travel_date','duration','hotel_accommodation','guide_porter','message',
        'is_read',
    ];
}
