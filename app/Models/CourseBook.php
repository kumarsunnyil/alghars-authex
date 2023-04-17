<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseBook extends Model
{
    use HasFactory;
    protected $table = 'course_book';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'course_book_id',
        'user_id',
        'program_name',
        'no_of_classes',
        'description',
        'end_date',
        'start_date'
    ];
}
