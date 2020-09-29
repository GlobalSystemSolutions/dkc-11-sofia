<?php

namespace App\Models\Center;

use App\Models\Center\Practice;
use App\Models\Center\Schedule\Schedule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
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

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}
