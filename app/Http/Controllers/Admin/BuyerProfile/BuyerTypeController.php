<?php

namespace App\Http\Controllers\Admin\BuyerProfile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Center\PublicRelations\Buyer;
use App\Models\Center\PublicRelations\BuyerType;
use App\Http\Requests\Admin\BuyerProfile\EditBuyerTypeRequest;
use App\Http\Requests\Admin\BuyerProfile\CreateBuyerTypeRequest;

class BuyerTypeController extends Controller
{

    public function create(CreateBuyerTypeRequest $request)
    {
        $buyerType = new BuyerType;
        $buyerType->name = $request->name;
        $buyerType->slug = str_slug($request->name);
        $buyerType->active = isset($request->active) ? true : false;
        $buyerType->save();

        flash()->success('', 'Успешно създаден раздел.');

        return redirect()->route('admin.buyer.index');
    }

    public function edit(EditBuyerTypeRequest $request)
    {
        $buyerType = BuyerType::where('id', $request->buyer_type_id)
                        ->get()->first();

        $buyerType->fill($request->all());
        $buyerType->active = isset($request->active) ? true : false;

        if ($buyerType->isDirty('name')) {
            $buyerType->slug = str_slug($request->name);
        }

        $buyerType->save();

        flash()->success('', 'Промените са запазени.');

        return redirect()->route('admin.buyer.index');
    }

    public function activate(Request $request)
    {
        $buyerType = BuyerType::where('id', $request->buyer_type_id)
                        ->get()->first();

        $buyerType->active = true;
        $buyerType->save();

        Buyer::where('buyer_type_id', $request->buyer_type_id)
            ->update([
                'published' => true,
                'active' => true,
            ]);

        flash()->success('', 'Успешна активация.');

        return redirect()->route('admin.buyer.index');
    }

    public function deactivate(Request $request)
    {
        $buyerType = BuyerType::where('id', $request->buyer_type_id)
                        ->get()->first();

        $buyerType->active = false;
        $buyerType->save();

        Buyer::where('buyer_type_id', $request->buyer_type_id)
            ->update([
                'published' => false,
                'active' => false,
            ]);

        flash()->success('', 'Успешна деактивация.');

        return redirect()->route('admin.buyer.index');
    }

    public function delete(Request $request)
    {
        Buyer::where('buyer_type_id', $request->buyer_type_id)
            ->update([
                'published' => false,
                'active' => false,
            ]);

        Buyer::where('buyer_type_id', $request->buyer_type_id)
            ->delete();

        $buyerType = BuyerType::where('id', $request->buyer_type_id)
                        ->get()->first();

        $buyerType->active = false;
        $buyerType->save();
        $buyerType->delete();

        flash()->success('', 'Успешно изтрит раздел.');

        return redirect()->route('admin.buyer.index');
    }
}
