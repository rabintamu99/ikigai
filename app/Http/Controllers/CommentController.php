<?php

namespace App\Http\Controllers;
use App\Http\Controllers\PostController;

use Illuminate\Http\Request;


class CommentController extends Controller
{
   

public function store(Post $post, Request $request)
{
    $this->validate($request, [
        'content' => 'required',
    ]);

    $post->comments()->create([
        'user_id' => auth()->id(),
        'content' => $request->input('content'),
    ]);

    return back();
}

}
