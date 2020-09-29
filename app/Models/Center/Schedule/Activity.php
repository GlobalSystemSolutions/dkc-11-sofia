<?php

namespace App\Models\Center\Schedule;

use App\Models\Center\Schedule\Schedule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Activity extends Model
{
    use SoftDeletes;

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}
