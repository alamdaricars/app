<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repair_records extends Model
{

    protected $table='repair_records';
    protected $guarded=['id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
