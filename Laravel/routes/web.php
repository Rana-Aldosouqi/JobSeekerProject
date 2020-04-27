<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/index', function () {
//    return view('user.index');
//});
//Route::get('/Home',function (){
//    return view('user.Home');
//});
//rana-------------------------------------------------------------------------------------------------------
use App\Post;

Route::get('/index','PostController@getPostView');
Route::Post('/index','PostController@doPost');
Route::get('/posts','PostController@getPostsView');

//for Home Page
Route::get('/Home','HomeController@getHomeView');
Route::get('/Home','HomeController@getHomePostsView');
//for all jobs
Route::get('/Alljobs','AlljobsController@getPostsView');
Route::get('/Alljobs','AlljobsController@getAllPostsView');

//for catPosts
Route::get('/categories/{id}','CategoryController@getCategoryView');
Route::get('/categories/{id}', 'CategoryController@getCatPostsView');

//for search
Route::any('/search','PostController@dosearch');

//----------------------------------------------------------------------------------------------------------------------
//amina
Route::get('/AccountSettings(Employee)', function () {
    return view('user.AccountSettings(Employee)');
});

Route::Post('/AccountSettings(Employee),SettingController@sendChange');
Route::get('/AccountSettings(Employee),SettingController@settingView');
Route::get('/AccountSettings(Employee),SettingController@store');


//new amina
Route::get('/userprofile','Settingcontroller@received');
Route::get('/userprofile,SettingController@store');
Route::get('/{id}/settings(Employee)','Settingcontroller@edit');
Route::put('/{id}','Settingcontroller@update');


//shimaa

Route::get('/companyprofile','postscontroller@index')->name('shared.index');
Route::post('/companyprofile','postscontroller@store')->name('shared.store');


Route::get('/{id}/setting','postscontroller@edit')->name('shared.edit');
Route::put('/{id}','postscontroller@update')->name('shared.update');



//eman
Route::get('/Login','AuthController@getLoginView')->name('login');
Route::post('/Login','AuthController@doLogin');
Route::get('/Register','AuthController@getRegisterView');
Route::post('/Register','AuthController@doRegistration');
Route::get('/Logout','AuthController@doLogout');















Route::get('/', function () {

//find the requirements of post with id=444
//$post=\App\Post::find(444);
//dd($post->requirements);

//$requirement=\App\Requirement::find(1);
//dd($requirement->Post->job_title);

//$post=\App\Post::find(9);
//dd($post->languages);

//$lang=\App\Language::find(1);
 //dd($lang->user_id);


//post with category id=19
//$cat=\App\Category::find(19);
//dd($cat->posts);

//category of post with id=6 woooork

$posts=\App\Post::find(6);
dd($posts->Category->category);


//$catposts1=\App\Post::where('category','=','5');
//    dd($catposts1->Category->category);

//$catposts=\App\Category::where('category','<=','5');
//dd($catposts->Post);


//language of post with id=15
   // $post=\App\Post::find(15);
   // dd($post->Language->post_id);
//$lang=\App\Language::find(5);
//dd($lang->posts);

//$post=\App\Post::find(10);
//dd($post->categories);

//$lang=\App\Language::find(4);
//dd($lang->);

});
