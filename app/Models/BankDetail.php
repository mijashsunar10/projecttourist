<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BankDetail extends Model
{
    protected $fillable = ['bank_name', 'account_holder_name', 'account_number', 'swift_code', 'address', 'mobile', 'zip_code', 'email'];
}
