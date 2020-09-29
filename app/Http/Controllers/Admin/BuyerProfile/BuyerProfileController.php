<?php

namespace App\Http\Controllers\Admin\BuyerProfile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Center\PublicRelations\Buyer;
use App\Models\Center\PublicRelations\BuyerType;
use App\Http\Requests\Admin\BuyerProfile\EditBuyerRequest;
use App\Http\Requests\Admin\BuyerProfile\CreateBuyerRequest;

class BuyerProfileController extends Controller
{
    public function index()
    {
        $buyerTypes = BuyerType::all()->sortBy('name');

        return view('admin.buyer.index', [
            'buyer_types' => $buyerTypes,
        ]);
    }

    public function show(Request $request)
    {
        $buyerType = BuyerType::where('slug', $request->slug)->get()->first();

        $buyers = Buyer::all()
            ->where('buyer_type_id', $buyerType->id)
            ->sortByDesc('created_at')
            ->sortByDesc('published_on');

        return view('admin.buyer.show', [
            'buyer_type' => $buyerType,
            'buyers' => $buyers,
        ]);
    }

    public function showCreate(Request $request)
    {
        $buyerTypeSelected = BuyerType::where('id', $request->buyer_type_id)->get()->first();

        $buyerTypes = BuyerType::all()->where('active', 1)->sortBy('name');

        return view('admin.buyer.create', [
            'buyer_type_selected' => $buyerTypeSelected,
            'buyer_types' => $buyerTypes,
        ]);
    }

    public function create(CreateBuyerRequest $request)
    {
        $buyer = new Buyer;
        $buyer->fill($request->all());
        $buyer->buyer_type_id = $request->buyer_type_id;
        $buyer->published = isset($request->published) ? true : false;
        $buyer->published_on_string = $request->published_on;
        $buyer->published_on = $request->published_on_submit;
        $buyer->deadline = $request->deadline_submit;
        $buyer->deadline_string = $request->deadline;
        $buyer->slug = str_slug($request->title, '-') . '-'. strtolower(str_random());
        $buyer->save();

        $buyerTypeSlug = $buyer->buyer_type->slug;

        flash()->success('', 'Успешно създаденa публикация.');

        return redirect('/admin/buyer-profile/' . $buyerTypeSlug);
    }

    public function showEdit(Request $request)
    {
        $buyer = Buyer::where('id', $request->buyer_id)->get()->first();
        $buyerTypeSelected = BuyerType::where('id', $buyer->buyer_type_id)->get()->first();
        $buyerTypes = BuyerType::all()->where('active', 1)->sortBy('name');

        return view('admin.buyer.edit', [
            'buyer' => $buyer,
            'buyer_type_selected' => $buyerTypeSelected,
            'buyer_types' => $buyerTypes,
        ]);
    }

    public function edit(EditBuyerRequest $request)
    {
        $buyer = Buyer::where('id', $request->buyer_type_id)->get()->first();

        $buyer->fill($request->all());
        $buyer->buyer_type_id = $request->buyer_type_id;
        $buyer->published = isset($request->published) ? true : false;
        $buyer->published_on_string = $request->published_on;
        $buyer->published_on = $request->published_on_submit;
        $buyer->deadline = $request->deadline_submit;
        $buyer->deadline_string = $request->deadline;

        if ($buyer->isDirty('title')) {
            $buyer->slug = str_slug($request->title, '-') . '-'. strtolower(str_random());
        }

        $buyer->save();

        $buyerTypeSlug = $buyer->buyer_type->slug;

        flash()->success('', 'Успешно редактирана публикация.');

        return redirect('/admin/buyer-profile/' . $buyerTypeSlug);
    }

    public function activate(Request $request)
    {
        $buyer = Buyer::where('id', $request->buyer_id)->get()->first();

        $buyer->published = true;
        $buyer->save();

        $buyerTypeSlug = $buyer->buyer_type->slug;

        flash()->success('', 'Успешна публикация.');

        return redirect('/admin/buyer-profile/' . $buyerTypeSlug);
    }

    public function deactivate(Request $request)
    {
        $buyer = Buyer::where('id', $request->buyer_id)->get()->first();

        $buyer->published = false;
        $buyer->save();

        $buyerTypeSlug = $buyer->buyer_type->slug;

        flash()->success('', 'Успешно отменена публикация.');

        return redirect('/admin/buyer-profile/' . $buyerTypeSlug);
    }

    public function delete(Request $request)
    {
        $buyer = Buyer::where('id', $request->buyer_id)->get()->first();

        $buyer->published = false;
        $buyer->save();

        $buyerTypeSlug = $buyer->buyer_type->slug;
        $buyer->delete();

        flash()->success('', 'Успешнo изтрита публикация.');

        return redirect('/admin/buyer-profile/' . $buyerTypeSlug);
    }
}
