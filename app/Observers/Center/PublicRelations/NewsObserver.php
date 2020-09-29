<?php

namespace App\Observers\Center\PublicRelations;

use App\Models\Center\PublicRelations\News;

class NewsObserver
{
    public function creating(News $news)
    {
        //$news->slug = str_slug($news->title);
    }
}