<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $primaryKey = '__pk';
    protected $dates = ['start_date','end_date'];
    public function property(){
        return $this->belongsTo(Property::class, '_fk_property');
    }
}
