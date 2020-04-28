<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategoryView(){

        return view('user.Category');
    }



    function getCatPostsView($id)
    {
        $cat =\App\Category::find($id);
//        where('id','=',$id)->simplePaginate(4);

        if ($cat == null) {
            return redirect('/');
        }
        return view('user.Category', ['data' => $cat]);
    }
}
