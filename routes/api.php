<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;


// Route::get('/posts',function(){

//     $post = Post::create([
//         'title' => 'My First Post',
//         'slug' => 'my-first-post'
//     ]);

//     return $post;
// });


// Routes for Posts
Route::resource('Post','PostController');

Route::get('/test', function()
{
 return ['message'=>'hello'];
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
