<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $primaryKey = '__pk';
    public function property(){
        return $this->belongsTo(Property::class, '_fk_location');
    }
}
