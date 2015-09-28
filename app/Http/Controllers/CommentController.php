<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;

class CommentController extends Controller
{
    /**
     * CommentController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth', ['only' => 'admin']);
    }

    public function add(Request $request)
    {
        $comment = Comment::create($request->all());

        if($comment)
        {
            Flash::success("你的留言（" . $comment->name . " "
                . $comment->comment . "）已经成功提交");
        }
        else
        {
            Flash::error("留言提交失败！");
        }


        return back();
    }

    public function admin()
    {
        $comments = Comment::all();

        return view('comment.admin', compact('comments'));
    }

    public function delete(Request $request)
    {
        $comment = Comment::destroy($request['commentId']);

        if($comment)
        {
            Flash::success("留言已经删除！");
        }
        else
        {
            Flash::error("留言删除失败！");
        }

        return back();
    }
}