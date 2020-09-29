<?php

namespace App\Models\Center\PublicRelations;

use App\Models\Center\PublicRelations\BuyerType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Buyer extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'token',
        'title',
        'published_on',
        'slug',
        'body',
        'deadline',
        'buyer_type_id',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function buyer_type()
    {
        return $this->belongsTo(BuyerType::class);
    }
}
