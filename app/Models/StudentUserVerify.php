<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




class StudentUserVerify extends Model
{
    use HasFactory;

    public $table = "student_user_verify";

    /**
     * Write code on Method
     *
     * @return response()
     */
    protected $fillable = [
        'student_user_id',
        'token',
    ];

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function user()
    {
        return $this->belongsTo(StudentUser::class);
    }
}
