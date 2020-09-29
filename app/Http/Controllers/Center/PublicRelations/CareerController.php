<?php

namespace App\Http\Controllers\Center\PublicRelations;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Center\PublicRelations\Career;

class CareerController extends Controller
{
    public function index()
    {
        $currentDate = Carbon::now()->toDateString();

        $careers = Career::where('published', 1)
            ->where('published_on', '<=', $currentDate)
            ->orderBy('created_at', 'desc')
            ->orderBy('published_on', 'desc')
            ->paginate(10);

        $latestCareers = Career::all()
            ->where('published', 1)
            ->where('published_on', '<=', $currentDate)
            ->sortByDesc('created_at')
            ->sortByDesc('published_on')
            ->take(5);

        return view('center.public-relations.careers.index', [
            'careers' => $careers,
            'latest_careers' => $latestCareers,
        ]);
    }

    public function show(Request $request)
    {
        $currentDate = Carbon::now()->toDateString();

        $publication = Career::where('slug', $request->slug)
            ->where('published', 1)
            ->where('published_on', '<=', $currentDate)
            ->get()
            ->first();

        if (empty($publication)) {
            abort(404);
        }

        $latestCareers = Career::all()
            ->where('published', 1)
            ->where('published_on', '<=', $currentDate)
            ->sortByDesc('created_at')
            ->sortByDesc('published_on')
            ->take(5);

        return view('center.public-relations.careers.publication', [
            'publication' => $publication,
            'last_careers' => $latestCareers,
        ]);
    }
}
