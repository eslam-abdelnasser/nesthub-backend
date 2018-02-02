<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function edit($id)
    {
        //
        $users = User::find(Auth::user()->id);

        return view('user.user-profile', ['users' => $users]);


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

        $update = User::where('id', Auth::user()->id)
            ->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'mobile_number' => $request->input('mobile_number'),
                'title' => $request->input('title'),
                'about_me' => $request->input('about_me'),
            ]);
        if ($update) {
            return redirect()->route('user-profile.edit', ['user_profile' => Auth::user()->id])->with('success', 'Profile  Updated Successfully');
        }
        //redirect
        return back()->withInput();
    }

    public function upload_image(Request $request){

        $images = $request->file('images') ;
        $image_name = time().$images->getClientOriginalName().'.'.$images->getClientOriginalExtension() ;
        $images->move(public_path('/images/user_image'),$image_name);
        $user=new User;
        $user->img_url=$image_name;
        $user->save();
//        $image = User::where('id',Auth::user()->id)->updateOrCreate([
//          'img_url'=> $request->file('images')
//        ]) ;

        return redirect()->route('user-profile.edit', ['user_profile' => Auth::user()->id]);

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

}
