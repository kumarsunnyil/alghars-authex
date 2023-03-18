<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentVerificationEmail extends Controller
{


    use HasFactory;

    public $table = "student_verifcation";

    /**
     * Write code on Method
     *
     * @return response()
     */
    protected $fillable = [
        'user_id',
        'token',
    ];

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
