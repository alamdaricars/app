<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_car extends Model
{
    protected $table='user_car_details';
    protected $guarded=['id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function color(){
        switch ($this->attributes['color']){

            case '1':
                return 'مشکی';
                break;
            case '2':
                return 'سفید';
                break;
                case '3':
                return 'تیتانیوم';
                break;
                case '4':
                return 'کله غازی';
                break;
                case '5':
                return 'قرمز';
                break;
        }

    }
    use HasFactory;
}
