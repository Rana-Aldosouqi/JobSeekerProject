<?php

namespace App\Http\Controllers;

use App\Feedback;
use App\Image;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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


<<<<<<< HEAD
    //    $feedbacks = Feedback::where('id', '!=', auth()->id())
       //     ->where('published', '=' , 1)
//            ->where('user_id', '!=', auth()->id())
//            ->where('image_id' ,'=' , 'user_id')
    //        ->get()->all();
//
      //  $users = User::where('id', '!=', auth()->id())->get()->all();

      //  $images = Image::where('id', '!=', auth()->id())->get()->all();

        return view('user.Alljobs', ['topPosts' => $topPosts]
            //,['feesbacks' => $feedbacks],
         //   ['users' => $users] ,
         //   ['images' => $images]
        );
=======

        return view('user.Alljobs', ['topPosts' => $topPosts]);
>>>>>>> 011e3b91ddb7ac969408ac56a80cae0eba2bed9e
    }

    public function getPostDetailsView(){

        return view('user.Apply');

    }

    public function getPostDetails( $id){

        $post=\App\Post::where('id', $id)->get();
        $postt=\App\Post::where('id', $id)->get()->first();


        if ($postt === null) {
            return redirect("/Alljobs");
        }else{
            return view('user.Apply', ['post' => $post]);
        }




    }



}
