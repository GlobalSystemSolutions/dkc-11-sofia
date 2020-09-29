<?php

namespace App\Http\Controllers\Center\PublicRelations;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Center\PublicRelations\Campaign;

class CampaignController extends Controller
{
    public function index()
    {
        $currentDate = Carbon::now()->toDateString();

        $campaigns = Campaign::where('published', 1)
            ->where('published_on', '<=', $currentDate)
            ->orderBy('created_at', 'desc')
            ->orderBy('published_on', 'desc')
            ->paginate(10);

        $latestCampaigns = Campaign::all()
            ->where('published', 1)
            ->where('published_on', '<=', $currentDate)
            ->sortByDesc('created_at')
            ->sortByDesc('published_on')
            ->take(5);

        return view('center.public-relations.campaigns.index', [
            'campaigns' => $campaigns,
            'latest_campaigns' => $latestCampaigns,
        ]);
    }

    public function show(Request $request)
    {
        $currentDate = Carbon::now()->toDateString();

        $publication = Campaign::where('slug', $request->slug)
            ->where('published', 1)
            ->where('published_on', '<=', $currentDate)
            ->get()
            ->first();

        if (empty($publication)) {
            abort(404);
        }

        $campaigns = Campaign::all()
            ->where('published', 1)
            ->where('published_on', '<=', $currentDate)
            ->sortByDesc('created_at')
            ->sortByDesc('published_on')
            ->take(5);

        return view('center.public-relations.campaigns.publication', [
            'publication' => $publication,
            'last_campaigns' => $campaigns,
        ]);
    }
}
