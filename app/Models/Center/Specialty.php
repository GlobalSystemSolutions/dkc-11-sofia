<?php

namespace App\Models\Center;

use App\Models\Center\Practice;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Specialty extends Model
{
    use SoftDeletes;

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function practices()
    {
        return $this->hasMany(Practice::class);
    }
}
