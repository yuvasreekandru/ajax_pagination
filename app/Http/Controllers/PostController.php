<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::paginate(5); // Change the number to set how many items per page

        if ($request->ajax()) {
            return response()->json(view('posts', compact('posts'))->render());
        }

        return view('home', compact('posts'));
    }
}
