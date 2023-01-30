<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\Category;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Client\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NewsController extends Controller
{

    public function index() :View
    {
        $news = News::orderBy('id')->paginate(10);
        return view('admin.news.index', ['news' => $news->items(), 'pagination' => $news]);
    }


    public function create(): View
    {
        $categories = Category::all();
        return view('admin.news.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(NewsRequest $request): RedirectResponse
    {
        $data = $request->only('title', 'description', 'content');
        $categories = $request->input('categories');

        $news = new News($data);
        User::findOrFail(1)->news()->save($news);

        $news->categories()->sync($categories);

        return  redirect()->route('admin.news.index')->with('status', 'News created!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function show(int $id): View
    {
        $news = News::findOrFail($id);
        return view('admin.news.show', ['news' => $news]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function edit(int $id): View
    {

        $news = News::findOrFail($id);
        $categories = Category::all();
        return view('admin.news.edit', ['news' => $news, 'categories' => $categories]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     *
     */
    public function update(NewsRequest $request, int $id)
    {
        $news = News::findOrFail($id);
        $news->update($request->only('title', 'description', 'category_id'));
        $news->categories()->sync($request->input('categories'));
        return redirect()->route('admin.news.index')->with('status', 'News updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();
        return redirect()->route('admin.news.index')->with('success', 'News deleted successfully.');
    }
}
