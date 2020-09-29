<?php

namespace App\Http\Controllers\Admin\Campaign;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Center\PublicRelations\Campaign;
use App\Http\Requests\Admin\Campaign\EditCampaignRequest;
use App\Http\Requests\Admin\Campaign\CreateCampaignRequest;

class CampaignController extends Controller
{
    public function index(Request $request)
    {
        $campaignsCollection = Campaign::all()
                        ->sortByDesc('created_at')
                        ->sortByDesc('published_on');

        return view('admin.campaigns.index', compact('campaignsCollection'));
    }

    public function showCreate(Request $request)
    {
        return view('admin.campaigns.create');
    }

    public function create(CreateCampaignRequest $request)
    {
        $campaign = new Campaign;
        $campaign->fill($request->all());
        $campaign->published = isset($request->published) ? true : false;
        $campaign->published_on_string = $request->published_on;
        $campaign->published_on = $request->published_on_submit;
        $campaign->slug = str_slug($request->title, '-') . '-'. strtolower(str_random());
        $campaign->save();

        flash()->success('', 'Успешно създаденa кампания.');

        return redirect()->route('admin.campaigns.index');
    }

    public function showEdit(Request $request)
    {
        $campaign = Campaign::where('id', $request->campaign_id)
                        ->get()->first();

        return view('admin.campaigns.edit', compact('campaign'));
    }

    public function edit(EditCampaignRequest $request)
    {
        $campaign = Campaign::where('id', $request->campaign_id)
                        ->get()->first();

        $campaign->fill($request->all());
        $campaign->published = isset($request->published) ? true : false;
        $campaign->published_on_string = $request->published_on;
        $campaign->published_on = $request->published_on_submit;

        if ($campaign->isDirty('title')) {
            $campaign->slug = str_slug($request->title, '-') . '-'. strtolower(str_random());
        }

        $campaign->save();

        flash()->success('Успешна редакция', 'Промените са запазени.');

        return redirect()->route('admin.campaigns.index');
    }

    public function activate(Request $request)
    {
        $campaign = Campaign::where('id', $request->campaign_id)
                        ->get()->first();

        $campaign->published = true;
        $campaign->save();

        flash()->success('', 'Успешно публикувана кампания!');

        return redirect()->route('admin.campaigns.index');
    }

    public function deactivate(Request $request)
    {
        $campaign = Campaign::where('id', $request->campaign_id)
                        ->get()->first();

        $campaign->published = false;
        $campaign->save();

        flash()->success('', 'Успешна отмяна на кампания!');

        return redirect()->route('admin.campaigns.index');
    }

    public function delete(Request $request)
    {
        $campaign = Campaign::where('id', $request->campaign_id)
                        ->get()->first();

        $campaign->published = false;
        $campaign->save();
        $campaign->delete();

        flash()->success('', 'Успешнo изтрита камапния!');

        return redirect()->route('admin.campaigns.index');
    }
}
