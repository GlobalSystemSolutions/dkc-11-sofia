<?php

namespace App\Observers\Center;

use App\Models\Center\Specialty;

class SpecialtyObserver
{
    public function creating(Specialty $specialty)
    {
        //$specialty->slug = str_slug($specialty->name_short);
    }
}