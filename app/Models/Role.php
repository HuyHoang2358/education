<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static updateOrCreate(string[] $array, string[] $role)
 */
class Role extends Model
{
    public $table = 'roles';
    protected $fillable = ['name', 'description'];
    protected $hidden = ['created_at', 'updated_at'];
}
