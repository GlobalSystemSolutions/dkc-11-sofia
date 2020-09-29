<?php

namespace App\Observers\Center;

use App\Models\Center\Doctor;

class DoctorObserver
{
    public function creating(Doctor $doctor)
    {
        //$doctor->slug = str_slug($doctor->full_name);
    }
}