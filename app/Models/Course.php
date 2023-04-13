<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
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
        'start_date',
        'end_date',
    ];
}
