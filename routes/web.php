<?php
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('welcome');
    $user = User::find(1);

    //return $user->posts;
    // return $user->posts()->create([
    //     'title' => 'test title',
    //     'description' => 'test description'
    // ]);

    //return $user->posts()->delete();

    $post = Post::find(4);
    //return Post::all();
    return $post->user->name;
});
