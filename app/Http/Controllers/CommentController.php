<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;

class CommentController extends Controller
{
    public function add(Request $request)
    {
        $comment = Comment::create($request->all());

        Flash::success("你的留言（" . $comment->name . " "
            . $comment->comment . "）已经成功提交");

        return back();
    }

    public function admin()
    {
        $comments = Comment::all();

        return view('comment.admin', compact('comments'));
    }

    public function delete(Request $request)
    {
        Comment::destroy($request['commentId']);

        Flash::success("留言已经删除！");

        return back();
    }
}