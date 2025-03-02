<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contest extends Model
{
    use HasFactory;

    protected $table = 'contests';

    protected $fillable = [
        'image',
        'title',
        'description',
        'content',
        'type',
        'exam_id',
        'start_time',
        'end_time'
    ];

    protected $dates = ['start_time', 'end_time'];

    /**
     * Get the exam associated with the contest.
     */
    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }
}
