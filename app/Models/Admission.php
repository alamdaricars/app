<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    protected $table='admission_details';
    protected $guarded=['id'];
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function status()
    {
        switch ($this->attributes['status'])
        {
            case '1';
            return 'پذیرش انجام شده';

                break;
                case '2';
            return 'کارشناسی شده';

                break;
                case '3';
            return 'در دست تعمییر';

                break;
                case '4';
            return 'در انتظار تحویل';

                break;

        }

    }
    public function bar_status()
    {switch ($this->attributes['status'])
    {
        case '1';
            return 30;

            break;
        case '2';
            return 60;

            break;
        case '3';
            return 80;

            break;
        case '4';
            return 100;

            break;

    }


    }
}
