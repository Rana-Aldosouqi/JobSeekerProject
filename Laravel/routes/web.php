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

use App\Post;

Route::get('/index','PostController@getPostView');
Route::Post('/index','PostController@doPost');
Route::get('/posts','PostController@getPostsView');

//for Home Page
Route::get('/Home','HomeController@getHomeView');

Route::get('/Home','HomeController@getHomePostsView');

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

Route::get('/MyResume','UserController@getMyResumeView');
Route::get('/MyResume','UserController@getExperienceView');

Route::get('/ContactUs','ContactUsController@getContactUSView');
Route::post('/ContactUs','ContactUsController@doContact');

Route::get('/ResumeBuilder','UserController@getResumeBuilderView')->name('ResumeBuilder');

Route::get('/personal',function (){
    return view ('user.ResumeBuilder');
});
//Route::post('/personal', 'UserController@doUploadImage');
Route::post('/personal','UserController@doPersonal');

Route::get('/social',function (){
    return view ('user.ResumeBuilder');
});
Route::post('/social','UserController@doSocial');

Route::get('/experiences',function (){
    return view ('user.ResumeBuilder');
});
Route::post('/experiences','UserController@doExperience');

Route::get('/skills',function (){
    return view ('user.ResumeBuilder');
});
Route::post('/skills','UserController@addSkill');

Route::get('/education',function (){
    return view ('user.ResumeBuilder');
});
Route::post('/education','UserController@doEducation');

//Route::get('/ResumeBuilder/experiences/{id}','UserController@getExperienceView');
//Route::get('/ResumeBuilder/skills/{id}','UserController@getSkillView');
//Route::get('/ResumeBuilder/education/{id}','UserController@getEducationView');
//Route::get('/ResumeBuilder/courses/{id}','UserController@getCourseView');
//Route::get('/ResumeBuilder/certificates/{id}','UserController@getCertificateView');
//Route::get('/ResumeBuilder/color/{id}','UserController@getColorView');



Route::get('/courses',function (){
    return view ('user.ResumeBuilder');
});
Route::get('/certificates',function (){
    return view ('user.ResumeBuilder');
});
Route::get('/color',function (){
    return view ('user.ResumeBuilder');
});

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

//category of post with id=6
    $posts=\App\Post::find(6);
    dd($posts->Category->category);

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
