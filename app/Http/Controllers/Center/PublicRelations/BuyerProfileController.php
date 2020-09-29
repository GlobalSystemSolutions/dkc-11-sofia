<?php

namespace App\Http\Controllers\Center\PublicRelations;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Center\PublicRelations\Buyer;
use App\Models\Center\PublicRelations\BuyerType;

class BuyerProfileController extends Controller
{
    public function index()
    {
        $buyerTypes = BuyerType::all()
            ->where('active', 1)
            ->sortBy('name');

        return view('center.public-relations.buyer.index', [
            'buyer_types' => $buyerTypes,
        ]);
    }

    public function showCategory(Request $request)
    {
        $currentDate = Carbon::now()->toDateString();

        $buyerType = BuyerType::where('slug', $request->slug)
            ->where('active', 1)
            ->get()
            ->first();

        if (empty($buyerType)) {
            abort(404);
        }

        $buyerTypes = BuyerType::all()
            ->where('active', 1)
            ->sortBy('name');

        $buyerCollection = Buyer::where('buyer_type_id', $buyerType->id)
            ->where('published', 1)
            ->where('published_on', '<=', $currentDate)
            ->orderBy('created_at', 'desc')
            ->orderBy('published_on', 'desc')
            ->paginate(10);

        return view('center.public-relations.buyer.category', [
            'buyer_types' => $buyerTypes,
            'active_buyer_type' => $buyerType,
            'buyer_collection' => $buyerCollection,
        ]);
    }

    public function showPublication(Request $request)
    {
        $currentDate = Carbon::now()->toDateString();

        $publication = Buyer::where('slug', $request->slug)
            ->where('published', 1)
            ->where('published_on', '<=', $currentDate)
            ->get()
            ->first();

        if (empty($publication)) {
            abort(404);
        }

        $latestBuyersFromCategory = Buyer::all()
            ->where('buyer_type_id', $publication->buyer_type_id)
            ->where('published', 1)
            ->where('published_on', '<=', $currentDate)
            ->sortByDesc('created_at')
            ->sortByDesc('published_on')
            ->take(5);

        return view('center.public-relations.buyer.publication', [
            'publication' => $publication,
            'latest_buyers_from_category' => $latestBuyersFromCategory,
        ]);
    }
}
