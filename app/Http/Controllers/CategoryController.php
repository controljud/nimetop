<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\PostModel as Post;
use DB;

class CategoryController extends Controller
{
    public function index(Request $request){
        $segments = $request->segments();
        $category = $segments[1];

        $posts = DB::table('post')
            ->join('post_category', 'post_category.id_post', '=', 'post.id')
            ->join('category', 'category.id', '=', 'post_category.id_category')
            ->where('category.initials', $category)
            ->get();

        $this->dados['posts'] = $posts;

        return view('category', $this->dados);
    }
}
