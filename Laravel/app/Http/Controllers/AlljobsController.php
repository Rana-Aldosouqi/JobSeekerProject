<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlljobsController extends Controller
{
    public function getPostsView(){

        return view('user.Alljobs');
    }

    public function getAllPostsView(){
        $topPosts=\App\Post::orderBy('created_at','DESC')
//            ->take(4)
//            ->skip(0)
//            ->get()
//            ->pluck('id')
//            ->toArray()
            ->simplePaginate(10);

//        $topPosts=\App\Post::find($topids);
        //dd($topPosts);
        return view('user.Alljobs',['topPosts'=>$topPosts]);
    }

    public function getPostDetailsView(){

        return view('user.Apply');

    }

    public function getPostDetails($id){
       $post=\App\Post::where('id', $id)->get();
       return view('user.Apply',['post' => $post]);
    }



}
