<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Image ;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
//        $facilities = Facility::all();
////        dd($facilities);
//        return view('create-building')->withFacilities($facilities);
        $users = User::all()->first();
        //dd($users);

        return view('user.user-profile', ['users' => $users]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function userProfile()
    {
        return view('user.user_profile');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // 'name', 'email', 'password','mobile_number','type','title','about_me'


//        return  $request->all();
        $update = User::where('id', Auth::user()->id)
            ->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'mobile_number' => $request->input('mobile_number'),
                'title' => $request->input('title'),
                'about_me' => $request->input('about_me'),
            ]);
        if ($update) {
            return json_encode(['success'=>'updated sucessfully']);
        }
        //redirect
        return back()->withInput();
    }
   public  function get_change_password(){
       $users = User::all()->first();
       //dd($users);

       return view('user.change', ['users' => $users]);
   }
   public function change_password(Request $request){

//       $password=User::where('id',Auth::user()->id);
//        if($request->input('current-password')==$password)
//        {
//            $update = User::where('id', Auth::user()->id)
//                ->update([
//                    'password' => $request->input('new-password'),
//                ]);
//            if ($update) {
//                return json_encode(['success'=>'updated sucessfully']);
//            }
//            else{
//                return "sara";
//            }
//        }
//        else
//        {
//            return json_encode(['error'=>'Your Current Password Incorrect ']);
//        }
       if(!(Hash::check($request->get('current-password'),Auth::user()->password))){
           // The passwords matches
           return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");

       }
       if(strcmp($request->get('current-password'),$request->get('new-password')) == 0){
           //current pssword is the same of new
           return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");

       }
       $validatedData=$request->validate([
           'current-password' => 'required',
           'new-password' =>  'required|min:6|alpha_num'
       ]);

//       $user= User::find(Auth::user()->id);
       $update = User::where('id', Auth::user()->id)
                ->update([
                    'password' => bcrypt($request->input('new-password')),
                ]);
       if ($update) {
//                return "updated sucessfully";
                 return redirect()->back()->with("success","Password changed successfully");
            }

       else
        {
            return redirect()->back()->with("error","Failed  changed successfully");
        }
   }


   public function image(Request $request)
   {
       if($request->hasFile('image')) {
           $file = $request->file('image');
           $filename = time().'NestHub'.'.'.$file->getClientOriginalExtension();
           $image_resize = Image::make($file->getRealPath());
           $image_resize->resize(160, 160);
           $image_resize->save(public_path('uploads/user_image/' .$filename));


           $user = User::find(Auth::user()->id);
           $user->img_url = $filename ;
           $user->save();

           return $filename ;
       }
   }

}
