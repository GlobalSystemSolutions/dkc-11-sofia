<?php

namespace App\Http\Controllers\Admin\Center;

use App\Models\Center\Center;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Center\CreateCenterRequest;
use App\Http\Requests\Admin\Center\EditCenterRequest;

class CenterController extends Controller
{
    public function index(Request $request)
    {
        $centerBases = Center::all();

        return view('admin.center.index', compact('centerBases'));
    }

    public function showCreate(Request $request)
    {
        return view('admin.center.create');
    }

    public function create(CreateCenterRequest $request)
    {
        $center = new Center;
        $center->fill($request->all());
        $center->medical_base = isset($request->medical_base) ? $request->medical_base : false;
        $center->active = isset($request->active) ? true : false;
        $center->save();

        flash()->success('', 'Успешно създадено лечебно заведение/база.');

        return redirect()->route('admin.center.index');
    }

    public function showEdit(Request $request)
    {
        $center = Center::where('id', $request->center_id)
                        ->get()->first();

        return view('admin.center.edit', compact('center'));
    }

    public function edit(EditCenterRequest $request)
    {
        $center = Center::where('id', $request->center_id)
                        ->get()->first();

        $center->fill($request->all());
        $center->save();

        flash()->success('Успешна редакция', 'Промените са запазени.');

        return redirect()->route('admin.center.index');
    }

    public function activate(Request $request)
    {
        $center = Center::where('id', $request->center_id)
                        ->get()->first();

        $center->active = true;
        $center->save();

        flash()->success('Успешна активация', 'Промените са запазени.');

        return redirect()->route('admin.center.index');
    }

    public function deactivate(Request $request)
    {
        $center = Center::where('id', $request->center_id)
                        ->get()->first();

        $center->active = false;
        $center->save();

        flash()->success('Успешна деактивация', 'Промените са запазени.');

        return redirect()->route('admin.center.index');
    }

    public function delete(Request $request)
    {
        $center = Center::where('id', $request->center_id)
                        ->get()->first();

        $center->active = false;
        $center->save();
        $center->delete();

        flash()->success('Успешнo изтриване', '');

        return redirect()->route('admin.center.index');
    }

}
