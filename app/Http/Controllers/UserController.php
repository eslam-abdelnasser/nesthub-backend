<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

   public function change_password(Request $request){

       $update = User::where('id', Auth::user()->id)
           ->update([
               'password' => $request->input('password'),
           ]);
       if ($update) {
           return redirect()->route('user-profile.edit', ['user_profile' => Auth::user()->id])->with('success', 'Profile  Updated Successfully');
       }
       //redirect
       return back()->withInput();
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
