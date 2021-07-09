<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $table = 'exams';
    protected $guarded = ['id'];

    public function users(){
        return $this->belongsToMany(User::class)->withTimestamps();
    }

    public function questions(){
        return $this->belongsToMany(Question::class)->withTimestamps();
    }

}
