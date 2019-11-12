<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\Http\Requests\CommentRequest;
use Illuminate\Support\Facades\Auth;


class CommentsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function store (CommentRequest $request)
    {
    
        $post = Post::findorFail($request->post_id);

        Comment::create([
            'body' => $request->body,
            'user_id' => Auth::id(),
            'post_id' => $post->id

        ]);
        return redirect()->route('posts.show', $post->id);
    }
}
