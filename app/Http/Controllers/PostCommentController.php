<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Events\PublishCommentEvent;
use Illuminate\Support\Facades\Auth;

class PostCommentController extends Controller
{
    //

    public function store(Post $post)
    {
        //get the user who created the comment
        $user_author = Auth::user();

        $comment = request()->validate([
            'body_comment' => 'required',
        ], request()->all());

        $comment['user_id'] = Auth::user()->id;

        $comment_saved = $post->comments()->create($comment);

        /* call the event to pass comments datas in broadcast */
        broadcast(new PublishCommentEvent($comment_saved, $user_author))->toOthers();

        return back();
    }

}
