<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $table = 'grades';
    protected $guarded = ['id'];

    public function creator(){
        return $this->hasOne(User::class, "creator_id");
    }

    public function students(){
        return $this->belongsToMany(User::class, "user_grades")->withTimestamps();
    }

    public function subjects(){
        return $this->hasMany(Subject::class);
    }
}
