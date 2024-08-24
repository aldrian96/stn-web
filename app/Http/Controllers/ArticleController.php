<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request = null, $id = 3)
    {
        $data = Article::orderBy('created_at', 'desc')->paginate($request->perPage ?? 10);
        return response()->view('dashboard.artikel.menu_artikel', $data);
    }
    /**
     * Display a listing of the resource.
     */
    public function indexDashboard(Request $request = null)
    {
        $data = Article::orderBy('created_at', 'desc')->paginate($request->perPage ?? 6);
        return response()->view('artikel', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = new Article();
        $data->title = $request->title;
        $data->author = $request->author;
        $data->body = $request->body;
        if ($data->save()) {
            return redirect()->route("dashboard.artikel.menu_artikel")->with([
                "message" => "Artikel berhasil dibuat!"
            ]);
        }
        return redirect()->back()->with([
            "message" => "Mohon maaf, terjadi kesalahan server!"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Find the article by ID, or fail if not found
        $data = Article::findOrFail($id);
        // Pass the article to the view
        return view('dashboard.artikel.crud.detail_artikel', ['data' => $data]);
        // dd($id);
    }
    /**
     * Display the specified resource.
     */
    public function showFullDetail(string $id)
    {
        // Find the article by ID, or fail if not found
        $data = Article::findOrFail($id);
        // Pass the article to the view
        return view('show_artikel', ['data' => $data]);
        // dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        dd($id);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function deleteArtikel(string $id)
    {
        $data = Article::findOrFail($id);
        if($data->delete()){
            return redirect()->back()->with([
                'message' => 'berhasil menghapus artikel.'
            ]);
            
        }
        return redirect()->back()->with([
            'message' => 'Gagal.'
        ]);
    }
}
