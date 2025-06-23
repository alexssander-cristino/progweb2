<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Volunteer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'phone', 'skills', 'points'
    ];

    public function donations()
    {
        return $this->hasMany(Donation::class);
    }

}
