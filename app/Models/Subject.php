<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $table = 'subjects';
    protected $guarded = ['id'];

    public function exams(){
        return $this->hasMany(Exam::class);
    }

    public function grade(){
        return $this->belongsTo(Grade::class);
    }

}
