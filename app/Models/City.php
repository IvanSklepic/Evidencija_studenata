<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'zip_code'     
    ];

    public function colleges() { return $this->hasMany(College::class);} 

    public function country() { return $this->belongsTo(Country::class);}
}
