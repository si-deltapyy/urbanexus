<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\News;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    //
    public function index()
    {
        $news = News::all();
        return view('pages.news.index', compact('news'));
    }

    public function create()
    {
        return view('pages.news.create');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'title' => 'required|string',
        //     'author' => 'required|string',
        //     'content' => 'required|string',
        //     'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Validate image file
        // ]);

        $news = new News();

        $imageName = $request->file('image')->store('public/news_images'); // Store image in storage
        $imagePath = Storage::url($imageName);
        $news->image_name = $imageName;
        $news->image_path = $imagePath;


        $news->title = $request->title;
        $news->author = $request->author;
        $news->content = $request->content;
        $news->save();

        return redirect('/admin/news')->with('success', 'Berita berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::find($id);

        return view('pages.news.show', ['news' => $news]);
    }

    public function edit($id)
    {
        $news = News::find($id);
        return view('pages.news.edit', ['news' => $news]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $news = News::find($id);

        if (!$news) {
            return response()->json([
                'message' => 'News not found'
            ], 404);
        }

        $request->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048' // Validate image file
        ]);

        // Update news data
        $news->title = $request->title;
        $news->author = $request->author;
        $news->content = $request->content;

        // Check if new image uploaded
        if ($request->hasFile('image')) {
            // Delete old image from storage
            Storage::delete($news->image_name);

            // Store new image in storage
            $imageName = $request->file('image')->store('public/news_images');
            $news->image_name = $imageName;
            $news->image_path = Storage::url($imageName);
        }

        $news->save();

        return redirect('/admin/news')->with('success', 'Berita berhasil disunting');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);

        if (!$news) {
            return response()->json([
                'message' => 'News not found'
            ], 404);
        }

        // Delete image from storage
        Storage::delete($news->image_name);

        // Delete news record from database
        $news->delete();

        return redirect('/admin/news')->with('success', 'Berita berhasil dihapus');
    }
}
