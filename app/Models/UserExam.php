<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserExam extends Model
{
    use HasFactory;

    protected $table = 'user_exams';
    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function answer(){
        return $this->hasMany(UserExamAnswer::class);
    }

    public function exam(){
        return $this->belongsTo(Exam::class);
    }
}
