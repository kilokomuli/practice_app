<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Comment;

class PostController extends Controller
{
    public function addPost(){
        $post = new Post();
        $post->title = "Second post title";
        $post->body = "second post description";
        $post->save();
        return "Post has been created successfully";
    }

    public function addComment($id){
        $post = Post::find($id);
        $comment = new Comment;
        $comment->comment ="This is my second comment";
        $post->comments()->save($comment);
        return "Comment has been posted";
    }
}
