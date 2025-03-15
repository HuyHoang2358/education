<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


/**
 * @method static create(array $array)
 * @method static updateOrCreate(string[] $array, array $array1)
 */
class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'google_id',
        'facebook_id',
        'role_id'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

    public function profile(): HasOne
    {
        return $this->hasOne(Profile::class);
    }

    public function role(){

        return $this->belongsTo(Role::class);

    }
}
