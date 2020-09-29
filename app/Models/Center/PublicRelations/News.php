<?php

namespace App\Models\Center\PublicRelations;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'token',
        'title',
        'published_on',
        'photographer',
        'author',
        'slug',
        'body',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
