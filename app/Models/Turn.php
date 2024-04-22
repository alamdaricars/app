<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turn extends Model
{
    protected $table='turn';
    protected $guarded=['id'];
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function type()
    {
        if ($this->attributes['type'] == 1)
        {
            return 'مشکل فنی';
        }else{
            return 'سرویس';
        }
    }
}
