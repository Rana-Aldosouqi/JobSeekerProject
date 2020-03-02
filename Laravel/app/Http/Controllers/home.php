<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home extends Controller
{
    public function getHomeView(){

        return view('user.Home');
    }

    public function getHomePostsView(){
        $topPosts=\App\Post::orderBy('created_at','DESC')
//            ->take(4)
//            ->skip(0)
//            ->get()
//            ->pluck('id')
//            ->toArray()
            ->simplePaginate(4);

//        $topPosts=\App\Post::find($topids);
        //dd($topPosts);
        return view('user.Home',['topPosts'=>$topPosts]);
    }
}
