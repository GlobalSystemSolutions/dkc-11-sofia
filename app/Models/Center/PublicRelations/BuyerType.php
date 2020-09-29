<?php

namespace App\Models\Center\PublicRelations;

use App\Models\Center\PublicRelations\Buyer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BuyerType extends Model
{

    use SoftDeletes;

     protected $fillable = [
        'token',
        'name',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function buyers()
    {
        return $this->hasMany(Buyer::class);
    }
}
