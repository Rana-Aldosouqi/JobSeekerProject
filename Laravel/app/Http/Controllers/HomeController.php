<?php

namespace App\Http\Controllers;

use App\Feedback;
use App\Image;
use App\User;
use Illuminate\Http\Request;

class homeController extends Controller
{
<<<<<<< HEAD
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function getHomeView()
    {

        return view('user.Home');
    }

    public function getHomePostsView()
    {
        $topPosts = \App\Post::orderBy('created_at', 'DESC')
//            ->take(4)
//            ->skip(0)
//            ->get()
//            ->pluck('id')
//            ->toArray()
            ->simplePaginate(6);

//        $topPosts=\App\Post::find($topids);
        //dd($topPosts);
        return view('user.Home', ['topPosts' => $topPosts]);
    }



    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
=======
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

        //Eman

        $feedbacks = Feedback::where('id', '!=', auth()->id())
            ->where('published', '=' , 1)
//            ->where('user_id', '!=', auth()->id())
//            ->where('image_id' ,'=' , 'user_id')
            ->simplePaginate(3);

        $users = User::where('id', '!=', auth()->id())->get()->all();
        $images = Image::where('id', '!=', auth()->id())->get()->all();

//        $topPosts=\App\Post::find($topids);
        //dd($topPosts);
        return view('user.Home', ['topPosts' => $topPosts],
            ['feesbacks' => $feedbacks],
            ['users' => $users] ,
            ['images' => $images]
        );
>>>>>>> 011e3b91ddb7ac969408ac56a80cae0eba2bed9e
    }
}
