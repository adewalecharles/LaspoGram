<?php

namespace LaspoGram\Http\Controllers;

use LaspoGram\Comment;
use LaspoGram\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use LaspoGram\Http\Requests\CommentRequest;

class CommentsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
 
 
    public function store(CommentRequest $request)
    {
        $post = Post::findOrFail($request->post_id);
 
        Comment::create([
            'body' => $request->body,
            'user_id' => Auth::id(),
            'post_id' => $post->id
        ]);
        return redirect()->route('posts.show', $post->id);
    }
}