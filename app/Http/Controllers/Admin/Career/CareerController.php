<?php

namespace App\Http\Controllers\Admin\Career;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Center\PublicRelations\Career;
use App\Http\Requests\Admin\Career\EditCareerRequest;
use App\Http\Requests\Admin\Career\CreateCareerRequest;

class CareerController extends Controller
{
    public function index(Request $request)
    {
        $careersCollection = Career::all()
                        ->sortByDesc('created_at')
                        ->sortByDesc('published_on');

        return view('admin.careers.index', compact('careersCollection'));
    }

    public function showCreate(Request $request)
    {
        return view('admin.careers.create');
    }

    public function create(CreateCareerRequest $request)
    {
        $career = new Career;
        $career->fill($request->all());
        $career->published = isset($request->published) ? true : false;
        $career->published_on_string = $request->published_on;
        $career->published_on = $request->published_on_submit;

        $career->deadline = $request->deadline_submit;
        $career->deadline_string = $request->deadline;
        $career->slug = str_slug($request->title, '-') . '-'. strtolower(str_random());
        $career->rating = isset($request->rating) ? (int)$request->rating : 0;
        $career->save();

        flash()->success('', 'Успешно създаденa обява в кариери.');

        return redirect()->route('admin.careers.index');
    }

    public function showEdit(Request $request)
    {
        $career = Career::where('id', $request->career_id)
                        ->get()->first();

        return view('admin.careers.edit', compact('career'));
    }

    public function edit(EditCareerRequest $request)
    {
        $career = Career::where('id', $request->career_id)
                        ->get()->first();

        $career->fill($request->all());
        $career->published = isset($request->published) ? true : false;
        $career->published_on_string = $request->published_on;
        $career->published_on = $request->published_on_submit;

        $career->deadline = $request->deadline_submit;
        $career->deadline_string = $request->deadline;

        if ($career->isDirty('title')) {
            $career->slug = str_slug($request->title, '-') . '-'. strtolower(str_random());
        }

        $career->rating = isset($request->rating) ? (int)$request->rating : 0;
        $career->save();

        flash()->success('Успешна редакция', 'Промените са запазени.');

        return redirect()->route('admin.careers.index');
    }

    public function activate(Request $request)
    {
        $career = Career::where('id', $request->career_id)
                        ->get()->first();

        $career->published = true;
        $career->save();

        flash()->success('', 'Успешно публикувана обява в кариери!');

        return redirect()->route('admin.careers.index');
    }

    public function deactivate(Request $request)
    {
        $career = Career::where('id', $request->career_id)
                        ->get()->first();

        $career->published = false;
        $career->save();

        flash()->success('', 'Успешна отмяна на публикация!');

        return redirect()->route('admin.careers.index');
    }

    public function delete(Request $request)
    {
        $career = Career::where('id', $request->career_id)
                        ->get()->first();

        $career->published = false;
        $career->save();
        $career->delete();

        flash()->success('', 'Успешнo изтрита обява!');

        return redirect()->route('admin.careers.index');
    }
}
