<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'address',
        'phone_numer',
        'oib'
    ];

    public function programs() { return $this->hasMany(Program::class);} 

    public function city() { return $this->belongsTo(City::class);}
}
