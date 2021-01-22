<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'information',
        'content',
    ];
    public function grades() { return $this->hasMany(Grade::class);}

    public function programs() { return $this->belongsTo(Program::class);}
}
