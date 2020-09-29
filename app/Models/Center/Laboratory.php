<?php

namespace App\Models\Center;

use App\Models\Center\Center;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Laboratory extends Model
{
    use SoftDeletes;

    public function center()
    {
        return $this->belongsTo(Center::class);
    }
}
