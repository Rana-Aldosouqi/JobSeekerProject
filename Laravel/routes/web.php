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
Route::get('/userprofile','Settingcontroller@received');
Route::post('/userprofile,SettingController@store');
Route::get('/settingsemployee','Settingcontroller@getUpdate');
Route::post('/settingsemployee','Settingcontroller@update');


//shimaa

Route::get('/companyprofile','postscontroller@index')->name('shared.index');
Route::post('/companyprofile','postscontroller@store')->name('shared.store');


Route::get('/{id}/setting','postscontroller@edit')->name('shared.edit');
Route::put('/{id}','postscontroller@update')->name('shared.update');



//Eman
Route::get('/Login','AuthController@getLoginView')->name('login');
Route::post('/Login','AuthController@doLogin');

Route::get('/Register','AuthController@getRegisterView');
Route::post('/Register','AuthController@doRegistration');

Route::get('/Logout','AuthController@doLogout');

Route::get('/ContactUs','ContactUsController@getContactUSView');
Route::post('/ContactUs','ContactUsController@doContact');

Route::get('/MyResume','UserController@getMyResumeView');

Route::get('/ResumeBuilder','ResumeBuilderController@getResumeBuilderView')->name('ResumeBuilder');

Route::post('/personal', 'ResumeBuilderController@doUploadImage');
Route::get('/personal','ResumeBuilderController@getPersonalView');
Route::post('/personal','ResumeBuilderController@doPersonal');

Route::get('/social','ResumeBuilderController@getSocialView');
Route::post('/social','ResumeBuilderController@doSocial');

Route::get('/experiences', 'ResumeBuilderController@getExperienceViewBuilder');
Route::post('/experiences','ResumeBuilderController@doExperience');
Route::delete('/experiences/{id}', 'ResumeBuilderController@deleteExperience');

Route::get('/skills', 'ResumeBuilderController@getSkillViewBuilder');
Route::post('/skills', 'ResumeBuilderController@AddSkill');
Route::delete('/skills/{id}', 'ResumeBuilderController@deleteSkill');

Route::get('/education', 'ResumeBuilderController@getEducationViewBuilder');
Route::post('/education', 'ResumeBuilderController@doEducation');
Route::delete('/education/{id}', 'ResumeBuilderController@deleteEducation');

Route::get('/courses', 'ResumeBuilderController@getCourseViewBuilder');
Route::post('/courses', 'ResumeBuilderController@AddCourse');
Route::delete('/courses/{id}', 'ResumeBuilderController@deleteCourse');

Route::get('/certificates', 'ResumeBuilderController@getCertificateViewBuilder');
Route::post('/certificates', 'ResumeBuilderController@AddCertificate');
Route::delete('/certificates/{id}', 'ResumeBuilderController@deleteCertificate');

Route::get('/color','ResumeBuilderController@getColorView');
Route::post('/color','ResumeBuilderController@changeColor');

Route::get('/sendemail', 'SendEmailController@index');
Route::post('/sendemail/send', 'SendEmailController@send');


//Route::get('/ResetPassword', 'AuthController@passwordResetTokenView');
//Route::post('/ResetPassword', 'AuthController@sendPasswordResetToken');
//Route::get('/ResetPasswordSendToken/{token}', 'AuthController@PasswordResetView');
//Route::post('/ResetPasswordSendToken/{token}', 'AuthController@resetPassword');






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


////category of post with id=6 woooork
//
//$posts=\App\Post::find(6);
//dd($posts->Category->category);
//=======
////category of post with id=6
//    $posts=\App\Post::find(6);
//    dd($posts->Category->category);
//>>>>>>> e86a55f20ea09e4b65f35c66709b52b16247071a
//
//
////$catposts1=\App\Post::where('category','=','5');
////    dd($catposts1->Category->category);
//
////$catposts=\App\Category::where('category','<=','5');
////dd($catposts->Post);


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