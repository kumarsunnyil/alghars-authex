<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class StudentEvaluation extends Model
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;
    protected $table = 'student_evaluation';

    protected $fillable = [
        'user_id',
        'student_user_id',
        'evaluated_date',
        'status',
    ];

    /**
     * A stub.
     *
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
