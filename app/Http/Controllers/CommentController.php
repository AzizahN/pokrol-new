<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use App\Models\Content;
use App\Models\Tag;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public $data;

    public function store(Request $request, $id) {
        $this->data['content_id'] = $id;
        $this->data['name'] = $request->name;
        $this->data['comment'] = $request->comment;

        Comment::create($this->data);

        $slug = Content::whereId($id)->pluck('slug');
        $slug = $slug[0];

//        dd($slug[0]);

        return redirect(route('detail', $slug));
    }
}
