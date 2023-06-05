<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, string $id)
    {
        $comment = $request->input('comment');
        $post = Post::find($id);


        Comment::insert([
            'comment' => $comment,
            'post_id' => $post->id,
            'created_at' => date('Y:m:d'),
        ]);

        return redirect("posts/$id");
    }
}