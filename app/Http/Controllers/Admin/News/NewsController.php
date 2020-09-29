<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\News\CreateNewsRequest;
use App\Http\Requests\Admin\News\EditNewsRequest;
use App\Models\Center\PublicRelations\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $newsCollection = News::all()
                        ->sortByDesc('created_at')
                        ->sortByDesc('published_on');

        return view('admin.news.index', compact('newsCollection'));
    }

    public function showCreate(Request $request)
    {
        return view('admin.news.create');
    }

    public function create(CreateNewsRequest $request)
    {
        $news = new News;
        $news->fill($request->all());
        $news->published = isset($request->published) ? true : false;
        $news->published_on_string = $request->published_on;
        $news->published_on = $request->published_on_submit;
        $news->slug = str_slug($request->title, '-') . '-'. strtolower(str_random());
        $news->save();

        flash()->success('', 'Успешно създаденa новина.');

        return redirect()->route('admin.news.index');
    }

    public function showEdit(Request $request)
    {
        $news = News::where('id', $request->news_id)
                        ->get()->first();

        return view('admin.news.edit', compact('news'));
    }

    public function edit(EditNewsRequest $request)
    {
        $news = News::where('id', $request->news_id)
                        ->get()->first();

        $news->fill($request->all());
        $news->published = isset($request->published) ? true : false;
        $news->published_on_string = $request->published_on;
        $news->published_on = $request->published_on_submit;

        if ($news->isDirty('title')) {
            $news->slug = str_slug($request->title, '-') . '-'. strtolower(str_random());
        }

        $news->save();

        flash()->success('Успешна редакция', 'Промените са запазени.');

        return redirect()->route('admin.news.index');
    }

    public function activate(Request $request)
    {
        $news = News::where('id', $request->news_id)
                        ->get()->first();

        $news->published = true;
        $news->save();

        flash()->success('', 'Успешно публикувана новина!');

        return redirect()->route('admin.news.index');
    }

    public function deactivate(Request $request)
    {
        $news = News::where('id', $request->news_id)
                        ->get()->first();

        $news->published = false;
        $news->save();

        flash()->success('', 'Успешна отмяна на публикация!');

        return redirect()->route('admin.news.index');
    }

    public function delete(Request $request)
    {
        $news = News::where('id', $request->news_id)
                        ->get()->first();

        $news->published = false;
        $news->save();
        $news->delete();

        flash()->success('', 'Успешнo изтрита новина!');

        return redirect()->route('admin.news.index');
    }

}


