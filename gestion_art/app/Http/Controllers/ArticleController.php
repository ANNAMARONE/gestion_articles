<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Articles;

class ArticleController extends Controller
{
    protected $Article;
    public function __construct(){
        $this->Article=new Articles();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response['Article']= $this->Article->all();
        return view('Articles.index')->with($response);
        //
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
        $this->Article->create($request->all());
        return redirect()->back();
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article=$this->Article->find($id);
        $article->Delete();
      return redirect('articles');  
        //
    }
}
