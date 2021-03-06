<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'birth_date',
        'phone_number',
        'email',
        'title'
    ];
    public function role() { return $this->belongsTo(Role::class);}
}
