<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function users() { return $this->hasmany(User::class);}
    public function teaachers() { return $this->hasmany(Teacher::class);}
    public function students() { return $this->hasmany(Student::class);}
}
