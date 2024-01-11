<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $primaryKey = 'donation_id';
    public $incrementing = false;
    protected $keyType = 'string';
    use HasFactory;
}
