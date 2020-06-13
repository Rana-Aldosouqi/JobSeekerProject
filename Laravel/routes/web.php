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


//Mohammed-----------------------------------------------------------------------------------------------
//TestBuilder
Route::prefix('/test')->middleware(['isCompany'])->group(function (){
    Route::get('/create/{post_id}','TestController@index')->name('createTest');
    Route::post('/create','TestController@store')->name('storeTest');
});
Route::prefix('/answer')->middleware(['auth'])->group(function (){
    Route::get('/submit/{test_id}','AnswerController@index')->name('answerExam');
    Route::post('/submit','AnswerController@store')->name('storeResult');
});

//TestQuestions
//===============================================================================================
//rana-------------------------------------------------------------------------------------------------------
use App\Post;
use App\User;
//use Illuminate\Support\Facades\Auth;


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

//for apply page
Route::get('/apply/{id}','AlljobsController@getPostDetailsView');
Route::get('/apply/{id}', 'AlljobsController@getPostDetails');
Route::get('/apply/{id}/done', function($id){
    $user = DB::table('posts')->where('id', '=', $id)->decrement('vacancies');
    //register the applied post with user id
    //i should make apply button disabled until test is done and payment is done

    return redirect("/response");
});

Route::get('/response', function(){

    return view('user.response');
});

//Route::get('/apply/{id}',function (){
//    return view ('user.Apply');
//});


//----------------------------------------------------------------------------------------------------------------------
//amina
Route::get('/userprofile','Settingcontroller@received');
Route::post('/userprofile,SettingController@store');
Route::get('/settingsemployee','Settingcontroller@getUpdate');
Route::post('/settingsemployee','Settingcontroller@update');


//shaimaa---------------------------------------------------------------------------------------------------------------

Route::get('/companyprofile','postscontroller@getProfile')->name('shared.index');
Route::post('/companyprofile','postscontroller@doGetProfile')->name('shared.store');

Route::get('/setting','postscontroller@getUpdateView');
Route::post('/setting','postscontroller@doUpdate');


Route::get('/volform','postscontroller@getVolanteerformView');
Route::post('/volform','postscontroller@doVolanteerform');
Route::get('/vol','postscontroller@getVolanteerView');


Route::get('/vol','postscontroller@doVolanteer');


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

Route::get('/ChangePassword','UserController@getChangePasswordView');
Route::post('/ChangePassword','UserController@ChangePassword');

Route::get('/start','OrderController@start');
Route::post('/start','OrderController@start');
Route::get('/ship','OrderController@ship');
Route::post('/ship','OrderController@ship');
Route::get('/complete','OrderController@complete');
Route::post('/complete','OrderController@complete');


//Route::get('/sendemail', 'SendEmailController@index');
//Route::post('/sendemail/send', 'SendEmailController@send');

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

$post=\App\Post::find(1);
dd($post->User->username);

////category of post with id=6 woooork
// this is select method
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
//<<<<<<< HEAD

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
//=======
//>>>>>>> 22420e4884048985c0a5b0685363af6e6005178e
