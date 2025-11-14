<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DemoController extends Controller
{
    public function index(){
        $posts = DB::table('posts')
            ->paginate(10);
            
        return view('test', compact('posts'));
    }
}    
