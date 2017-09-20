<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $primaryKey = '__pk';
    public function bookings(){
        return $this->hasMany(Booking::class, '_fk_property');
    }
    public function location(){
        return $this->belongsTo(Location::class, '_fk_location');
    }
}
