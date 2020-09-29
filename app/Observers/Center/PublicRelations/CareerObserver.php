<?php

namespace App\Observers\Center\PublicRelations;

use App\Models\Center\PublicRelations\Career;

class CareerObserver
{
    public function creating(Career $career)
    {
        //$career->slug = str_slug($career->title);
    }
}