<?php

namespace App\Observers\Center\PublicRelations;

use App\Models\Center\PublicRelations\Buyer;

class BuyerObserver
{
    public function creating(Buyer $buyer)
    {
        //$buyer->slug = str_slug($buyer->title);
    }
}