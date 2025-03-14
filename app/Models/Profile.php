<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static create(array $array)
 * @method static updateOrCreate(array $array, array $array1)
 */
class Profile extends Model
{
    public $table = 'profiles';
    protected $fillable = ['user_id', 'avatar', 'phone', 'birthday', 'address', 'ip_address'];
    public  $timestamps = false;
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
