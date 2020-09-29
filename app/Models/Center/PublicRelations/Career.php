<?php

namespace App\Models\Center\PublicRelations;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Career extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'token',
        'title',
        'published_on',
        'slug',
        'body',
        'position',
        'city',
        'author',

    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
