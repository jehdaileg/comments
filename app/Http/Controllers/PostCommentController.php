<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostCommentController extends Controller
{
    //

    public function store(Post $post)
    {

        $comment = request()->validate([
            'body_comment' => 'required',
        ], request()->all());

        $comment['user_id'] = Auth::user()->id;

        $post->comments()->create($comment);

        return back();
    }

}
