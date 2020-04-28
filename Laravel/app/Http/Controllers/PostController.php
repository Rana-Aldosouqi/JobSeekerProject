<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
class PostController extends Controller
{
    public function getPostView(){

        return view('user.index');
    }
//
//    public function getPostsView(){
//        $topPosts=\App\Post::orderBy('created_at','DESC')
////            ->take(4)
////            ->skip(0)
////            ->get()
////            ->pluck('id')
////            ->toArray()
//        ->simplePaginate(4);
//
////        $topPosts=\App\Post::find($topids);
//        //dd($topPosts);
//        return view('user.posts',['topPosts'=>$topPosts]);
//    }

    public function doPost(Request $request){
        if (Auth::check()) {
        $newPost= new \App\Post();
        $newPost->user_id = Auth::user()->id;
        $newPost->job_title=$request->get('job_title');
        $newPost->category_id=$request->get('category');
        $newPost->experience=$request->get('experience');
        $newPost->career_level=$request->get('career_level');
        $newPost->type=$request->get('JobType');
        $newPost->min_salary=$request->get('minsalary');
        $newPost->max_salary=$request->get('maxsalary');
        $newPost->vacancies=$request->get('vacancies');
        $newPost->min_age=$request->get('minage');
        $newPost->max_age=$request->get('maxage');
        $newPost->other=$request->get('about');
        $newPost->languages()->language=$request->get('language');
        $newPost->save();


        if ($newPost){
            return redirect("/Alljobs")->with(['message' => 'Posting Success']);
        }else{
            return redirect("/Alljobs")->with(['error' => 'Posting failed']);
        }


        }
        return redirect("/Login")->with(['message' => 'Login To Post']);
    }

    public function dosearch(){
        $q = Input::get ( 'q' );
        $post = Post::where('job_title','LIKE','%'.$q.'%')->orWhere('other','LIKE','%'.$q.'%')->get();
        if(count($post) > 0)
            return view('user.search')->withDetails($post)->withQuery ( $q );
        else return view ('user.search')->withMessage('No Details found. Try to search again !');
    }
}
