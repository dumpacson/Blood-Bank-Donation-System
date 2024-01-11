<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodBag extends Model
{
    protected $primaryKey = 'blood_type';
    public $incrementing = false;
    protected $keyType = 'string';
    use HasFactory;
}
