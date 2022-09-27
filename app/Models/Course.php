<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_name',
        'instructor_id',
        'course_img',
        'course_price',
        'course_rate',
        'course_lectures',
        'course_language',
        'course_description',
        'course_level',
        'course_duration'
    ];
}
