<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    protected $guarded = false;
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function assignments()
    {
        return $this->hasMany(Assignment::class);
    }

    public function attendance()
    {
        return $this->hasMany(Attendance::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }

    public function exams()
    {
        return $this->hasMany(Exam::class);
    }

    public function grades()
    {
        return $this->hasMany(Grade::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function results()
    {
        return $this->hasMany(Result::class);
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }

    public function timetables()
    {
        return $this->hasMany(Timetable::class);
    }
}
