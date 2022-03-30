<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
  
    public function index()
    {
       return Post::all();
    }

    public function store(Request $request)
    {
        // this is validate
        $request->validate([
            'title' => 'required'
        ]);
     return Post::create($request->all());
    }

  
    public function show($id)
    {
        return Post::find($id);
    }

  
    public function update(Request $request, $id)
    {
      $post =  Post::find($id);
      $post->update($request->all());
      return $post;
    }

  
    public function destroy($id)
    {
        return Post::destroy($id);
    }
}
