<?php

namespace App\Http\Controllers\Center;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Center\PublicRelations\News;
use App\Models\Center\PublicRelations\Campaign;


class HomeController extends Controller
{
    /**
     * Show the application home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currentDate = Carbon::now()->toDateString();

        $news = News::all()
            ->where('published', 1)
            ->where('published_on', '<=', $currentDate)
            ->sortByDesc('created_at')
            ->sortByDesc('published_on')
            ->take(3);

        $campaigns = Campaign::all()
            ->where('published', 1)
            ->where('published_on', '<=', $currentDate)
            ->sortByDesc('created_at')
            ->sortByDesc('published_on')
            ->take(3);

        return view('center.home', [
            'news_collection' => $news,
            'campaigns' => $campaigns,
        ]);
    }
}
