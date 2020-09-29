<?php

namespace App\Http\Controllers\Center\PublicRelations;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Center\PublicRelations\News;

class NewsController extends Controller
{
    public function index()
    {
        $currentDate = Carbon::now()->toDateString();

        $news = News::where('published', 1)
            ->where('published_on', '<=', $currentDate)
            ->orderBy('created_at', 'desc')
            ->orderBy('published_on', 'desc')
            ->paginate(10);

        $latestNews = News::all()
            ->where('published', 1)
            ->where('published_on', '<=', $currentDate)
            ->sortByDesc('created_at')
            ->sortByDesc('published_on')
            ->take(5);

        return view('center.public-relations.news.index', [
            'news_collection' => $news,
            'latest_news' => $latestNews,
        ]);
    }

    public function show(Request $request)
    {
        $currentDate = Carbon::now()->toDateString();

        $publication = News::where('slug', $request->slug)
            ->where('published', 1)
            ->where('published_on', '<=', $currentDate)
            ->get()
            ->first();

        if (empty($publication)) {
            abort(404);
        }

        $news = News::all()
            ->where('published', 1)
            ->where('published_on', '<=', $currentDate)
            ->sortByDesc('created_at')
            ->sortByDesc('published_on')
            ->take(5);

        return view('center.public-relations.news.publication', [
            'publication' => $publication,
            'last_news' => $news,
        ]);
    }
}
