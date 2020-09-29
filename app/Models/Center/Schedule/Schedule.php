<?php

namespace App\Models\Center\Schedule;

use App\Models\Center\Activity;
use App\Models\Center\Doctor;
use App\Models\Center\Practice;
use App\Models\Center\Schedule\Schedule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schedule extends Model
{
    use SoftDeletes;

    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function practice()
    {
        return $this->belongsTo(Practice::class);
    }
}
