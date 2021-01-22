<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = [
        'grade'
    ];

    public function student() { return $this->belongsToMany(Student::class);}
    public function subject() { return $this->belongsToMany(Subject::class);}
}
