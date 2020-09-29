<?php

namespace App\Models\Center;

use App\Models\Center\Laboratory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Center extends Model
{
    use SoftDeletes;

    protected $guarded = ['id', 'center_id', ];

    public function laboratories()
    {
        return $this->hasMany(Laboratory::class);
    }
}
