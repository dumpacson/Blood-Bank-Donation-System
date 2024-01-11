<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    protected $primaryKey = 'donor_id';
    public $incrementing = false;
    protected $keyType = 'string';
    use HasFactory;
}
