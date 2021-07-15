<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SportField extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price_hourly',
        'starting_hour',
        'ending_hour',
        'sport_location_id'
    ];

    public function sportsLocation(){
        return $this->hasOne(SportsLocation::class, 'id', 'sport_location_id');
    }
}
