<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
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
    }
}
