<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function deliveryTimes()
    {
        return $this->hasMany(deliveryTime::class);
    }
}
