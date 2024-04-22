<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    public function turn()
    {
        return $this->hasOne(Turn::class,'user_id');
    }
    public function user_car()
    {
        return $this->hasOne(User_car::class,'user_id');
    }

    public function admission()
    {
        return $this->hasMany(Admission::class,'user_id');
    }
    public function Repair_records()
    {
        return $this->hasMany(Repair_records::class,'user_id');
    }
    use HasApiTokens, HasFactory, Notifiable;
protected $table='users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded=['id'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
