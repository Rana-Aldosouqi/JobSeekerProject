<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PostController extends Controller
{
    public function getPostView(){

        return view('user.index');
    }

    public function getPostsView(){
        $topPosts=\App\Post::orderBy('created_at','DESC')
//            ->take(4)
//            ->skip(0)
//            ->get()
//            ->pluck('id')
//            ->toArray()
        ->simplePaginate(4);

//        $topPosts=\App\Post::find($topids);
        //dd($topPosts);
        return view('user.posts',['topPosts'=>$topPosts]);
    }

    public function doPost(Request $request){

        $newPost= new \App\Post();
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


        $newPost->save();
        if ($newPost){
            return redirect("/posts")->with(['message' => 'Posting Success']);
        }else{
            return redirect("/posts")->with(['error' => 'Posting failed']);
        }

    }
}
