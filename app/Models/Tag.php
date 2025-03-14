<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static updateOrCreate(string[] $array)
 */
class Tag extends Model
{
    public $table = 'tags';
    public $timestamps = false;
    protected $fillable = ['name'];
}
