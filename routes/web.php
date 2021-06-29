<?php

use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $files = File::files(resource_path("Post"));
    $posts = Post::all();


    return view('posts', [
        'posts' => $posts
    ]);

});

Route::get('posts/create', function() {
    $post = new Post();
    $post->title = "test";

    $post->save();

    return redirect()->back();
});
Route::get('posts/{post:slug}', function ($id) {
    $post = App\Models\Post::where('slug', '=', $id)->first();

//    dd($post);
    return view('post', [
        'post' => $post
    ]);
});

Route::get("categories/{category}", function(Category $category) {
    return view("posts", [
        "posts"=>$category->posts,
    ]);
});
