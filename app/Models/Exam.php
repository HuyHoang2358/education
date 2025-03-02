<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $fillable = ['title', 'file', 'subject_id', 'rating', 'year', 'province', 'slug'];

    public function subject()
    {
        return $this->belongsTo(Category::class, 'subject_id');
    }
}
