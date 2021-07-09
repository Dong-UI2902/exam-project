<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserExamAnswer extends Model
{
    use HasFactory;

    protected $table = 'user_exam_answers';
    protected $guarded = ['id'];

    public function user(){
        return $this->hasOneThrough(User::class, UserExam::class);
    }

    public function question(){
        return $this->belongsTo(Question::class);
    }

    public function exam(){
        return $this->hasOneThrough(Exam::class, UserExam::class);
    }
}
