<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;

    protected $fillable = [
        'instructor_name',
        'instructor_email',
        'instructor_img',
        'instructor_job_title',
        'remember_token',
    ];
}
