<?php

namespace App\Observers\Center\PublicRelations;

use App\Models\Center\PublicRelations\Campaign;

class CampaignObserver
{
    public function creating(Campaign $campaign)
    {
        //$campaign->slug = str_slug($campaign->title);
    }
}