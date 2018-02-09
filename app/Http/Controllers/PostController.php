<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\PostModel as Post;

class PostController extends Controller
{
    public function index(Request $request){
        $segments = $request->segments();
        $id_post = $segments[1];

        $post = Post::where('id', $id_post)->first();
        $this->dados['post'] = $post;

        return view('post', $this->dados);
    }
}