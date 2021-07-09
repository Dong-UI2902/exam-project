<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'birthday',
        'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    public function grades(){
        return $this->belongsToMany(Grade::class)->withTimestamps();
    }

    public function exams(){
        return $this->hasMany(UserExam::class);
    }

    public function subjects(){
        return $this->belongsToMany(Subject::class, "user_subjects")->withTimestamps();
    }
}
