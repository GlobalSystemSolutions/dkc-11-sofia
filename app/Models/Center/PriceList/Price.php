<?php

namespace App\Models\Center\PriceList;

use App\Models\Center\PriceList\Category;
use App\Models\Center\PriceList\Currency;
use App\Models\Center\PriceList\Group;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Price extends Model
{
    use SoftDeletes;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
