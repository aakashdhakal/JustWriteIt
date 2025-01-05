<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        //return the author details of the post as well
        foreach ($posts as $post) {
            $post->author = User::where('username', $post->author)->first();
        }
        return view('discover', compact('posts'));
    }
}