<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SportsLocation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'sport_types'
    ];

    public function sportField() {
        return $this->belongsTo(SportField::class);
    }
}
