<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static updateOrCreate(array $array, string[] $array1)
 */
class Subject extends Model
{
    public $table = 'roles';
    protected $fillable = ['name', 'slug', 'description', 'icon'];
    public $timestamps= false;
}
