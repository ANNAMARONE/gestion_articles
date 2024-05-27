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
    // public function show(string $id)
    // {
    //     $responses['Article']= $this->Article->find($id);
    //     return view('Articles.show')->with($responses);   
    // }
    public function show( $id)
    {
        $article= Articles::find($id);
        return view('Articles.show' ,compact('article'));   
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $response['articles']=$this->Article->find($id);
        return view('Articles.edit')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Articles=$this->Article->find($id);
        $Articles->update(array_merge($Articles->toArray(),$request->toArray()));
        return redirect('articles');
        //
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
