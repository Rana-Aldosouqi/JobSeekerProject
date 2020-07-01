<?php

namespace App\Http\Controllers;
use App\Certificate;
use App\Feedback;
use App\Image;
use App\Report;
use App\User;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DashBoardController extends Controller
{
    public function getDashBoardView()
    {
        $allCertificates = Certificate::orderBy('created_at', 'DESC')
            ->where('user_id','null')->get();
        return view('dashboard.DashBoard', [
            'data' => $allCertificates
        ]);
    }
    public function getHomeForAdminView()
    {
        $allCertificates = Certificate::orderBy('created_at', 'DESC')
            ->where('user_id','null')->get();
        return view('dashboard.DashBoard', [
            'data' => $allCertificates
        ]);
    }
    public function uploadAdminImage(Request $request)
    {
        //        Upload image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = sha1(time()) . '.' . $image->getClientOriginalExtension();

            //$location = 'images/' . $filename;
            $isStored = $image->storeAs("assets/uploads", $filename, ["disk" => "public"]);
            //Image::make($image)->resize(800, 400)->save($location);

            $imageRec = new Image();
            $imageRec->name = $filename;
            $imageRec->extension = $image->getClientOriginalExtension();
            $imageRec->path = "assets/uploads/" . $filename;
            $imageRec->save();

            $authUser = Auth::user();
            $authUser->image_id = $imageRec->id;
            $authUser->save();
        }
        return redirect()->back();
    }
    public function getProfileForAdminView()
    {
        $allCertificates = Certificate::orderBy('created_at', 'DESC')
            ->where('user_id','null')->get();
        return view('dashboard.DashBoard', [
            'data' => $allCertificates
        ]);
    }
    public function getSettingsForAdminView()
    {
        $allCertificates = Certificate::orderBy('created_at', 'DESC')
            ->where('user_id','null')->get();
        return view('dashboard.DashBoard', [
            'data' => $allCertificates
        ]);
    }
    public function updateAdminProfile(Request $request)
    {
        $rules = [
            'first_name' => 'required|min:4|max:60',
            'last_name' => 'required|min:4|max:60',
            'username' => 'required|min:4|max:100',
            'email' => 'required|email',
            'phone_number' => 'required|min:10|max:20',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()
                ->withInput($request->all())
                ->withErrors($validator->errors()->all());
        }
        $user = Auth::user();
        $user->first_name = $request->get('first_name');
        $user->last_name = $request->get('last_name');
        $user->username = $request->get('username');
        $user->email = $request->get('email');
        $user->phone_number = $request->get('phone_number');
        $user->save();

        $result = Auth::attempt([
            'username' => $request->get('username'),
            'password' => $request->get('password')
        ]);

    }
    public function getUsersForAdminView()
    {
        $users = User::where('id', '!=', auth()->id())->get()->all();
        return view('dashboard.DashBoard',[
            'data' => $users
        ]);
    }
    public function getPostsForAdminView()
    {
        $posts = Post::where('id', '!=', auth()->id())->get()->all();

        return view('dashboard.DashBoard',[
            'data' => $posts
        ]);
    }
    public function deleteJustUser($id)
    {
    $user = User::where('id',$id)->first();

    if ($user != null) {
        $user->delete();
        return redirect()->back();
    }
    return redirect()->back();
}
    public function deletePost($id){
        $post = Post::where('id',$id)->first();

        if ($post != null) {
            $post->delete();
            return redirect('/adminPosts');
        }
        return redirect('/adminPosts');
    }
    public function getFeedbackForAdminView()
    {
        $feedbacks = Feedback::where('id', '!=', auth()->id())->get()->all();

        return view('dashboard.DashBoard', [
            'data' => $feedbacks
        ]);
    }
    public function deleteFeedback($id)
    {
        $feedback = Feedback::where('id',$id)->first();

        if ($feedback != null) {
            $feedback->delete();
            return redirect()->back();
        }
        return redirect()->back();
    }
    public function publishFeedback(Request $request ,$id){

        $feedback = Feedback::find($id);
//        $feedback -> user_id = user()->id;
        $feedback->published = $request->get('published');
        $feedback->save();

        return redirect()->back();
    }
    public function getReportForAdminView()
    {
        $reports = Report::where('id', '!=', auth()->id())->get()->all();

        return view('dashboard.DashBoard', [
            'data' => $reports
        ]);
    }
    public function deleteUser($id,$user_id)
    {
        $report = Report::where('id',$id)->first();
        $user = User::where('id',$user_id)->first();

        if ($report != null) {

            $report->delete();
            $user->delete();
            return redirect()->back();
        }
        return redirect()->back();
    }
    public function deleteReport($id)
    {
        $report = Report::where('id',$id)->first();
        if ($report != null) {
            $report->delete();
            return redirect()->back();
        }
        return redirect()->back();
    }
//    public function checkActiveUser()
//    {
//        if (Auth::attempt(['email' => 'email', 'password' => 'password' , 'active' => true]))
//        {
//            return view('dashboard.DashBoard');
//            // The user is active, not suspended, and exists.
//        }
//    }
}
