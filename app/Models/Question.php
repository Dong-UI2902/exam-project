<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $table = 'questions';
    protected $guarded = ['id'];

    public function answers(){
        return $this->hasMany(QuestionAnswer::class);
    }

    public function exam(){
        return $this->belongsTo(Exam::class);
    }

    public function userAnswer(){
        return $this->hasMany(UserExamAnswer::class);
    }
}
