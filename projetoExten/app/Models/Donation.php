<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = [
        'volunteer_id', 'donor_name', 'type', 'amount', 'date'
    ];

    public function volunteer()
    {
        return $this->belongsTo(Volunteer::class);
    }
}
