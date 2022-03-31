<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Comments;

class PostController extends Controller
{
    public function addPost(){
        $post = new Post();
        $post->title = "First post title";
        $post->body = "First post description";
        $post->save();
        return "Post has been created successfully";
    }

    public function addComment($id){
        $post = Post::find($id);
        $comment = new addComment;
        $comment->comment ="This is my first comment";
        $post->comments()->save($comment);
        return "Comment has been posted";
    }
}
