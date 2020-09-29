<?php

namespace App\Models\Center\PriceList;

use App\Models\Center\PriceList\Price;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    public function prices()
    {
        return $this->hasMany(Price::class);
    }
}
