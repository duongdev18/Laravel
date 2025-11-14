<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        // lấy danh sách  cate
        $categories = DB::table('categories')->get();
        // nối các bảng posts và categories
        $posts = DB::table("posts")
        ->join('categories','categories.id','posts.category_id')
        ->limit(9)
        ->orderBy('posts.id','desc')
        ->get(['posts.*','name']);
        // dd($posts);
        return view('index',compact('posts', 'categories'));
    }
    // chi tiết bài viết
    public function show($id)
    {
        {
            $post = DB::table('posts')
            ->where('id',$id)
            ->first();
            return view('',compact('post'));
    }
}
}
