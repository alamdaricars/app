<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warranty extends Model
{
    protected $table='warranty';
    protected $guarded=['id'];
    use HasFactory;
}
