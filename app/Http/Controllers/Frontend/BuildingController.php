<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Additional;
use App\Models\Images;
use App\Models\Office;
use App\Models\Facility;
use App\Notifications\NewBuilding;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Building ;
use Illuminate\Support\Facades\Auth;

class BuildingController extends Controller
{
    //

    public function index()
    {
        // TODO user validation
        $buildings =Building::where('user_id','=',Auth::user()->id)->get();
        return view('index')->withBuildings($buildings);
    }

    public function createBuildig()
    {
        $facilities = Facility::all();
//        dd($facilities);
        return view('create-building')->withFacilities($facilities);
    }



    public function postBuilding(Request $request)
    {
//        dd($request->except('_token'));

        $this->validate($request ,array(
            'name'=>'required|max:200',
            'full_address'=>'required',
            'welcome_message'=>'required',
            'about_us'=>'required',
            'postcode'=>'required',
            'facilities'=>'required'
        ));


        $building = new Building();
        $building->name = $request->name ;
        $building->user_id = Auth::user()->id;
        $building->full_address =  $request->full_address ;
        $building->welcome_message = $request->welcome_message ;
        $building->about_us  =  $request->about_us ;
        $building->postcode = $request->postcode ;
      //  $building->facilities = json_encode($request->facilities);
        $building->save();

        $building->facilities()->sync($request->facilities);
//        Session::flash('success',' Your Building now Created');




        return  redirect()->route('create.offices',['id'=>$building->id]);
//        dd($request->all());
    }


    public function office($id)
    {
//        dd($id);
        $offices = Office::where('building_id','=',$id)->get();
        return view('offices.index')->withId($id)->withOffices($offices);
    }

    public function postOffice(Request $request , $id)
    {

        $this->validate($request ,array(
            'desks_available'=>'required',
            'square_footage'=>'required',
            'price'=>'required',
            'max'=>'required',
            'min'=>'required',
            'key_features'=>'required',
            'not_included'=>'required',
            'office_type'=>'required'
        ));

           $office = new Office();

           $office->building_id = $id ;
           $office->desks_available = $request->desks_available ;
           $office->square_footage = $request->square_footage ;
           $office->price = $request->price ;
           $office->max  = $request->max ;
           $office->min = $request->min ;
           $office->key_features = $request->key_features ;
           $office->not_included = $request->not_included ;
           if($request->office_type ==  'private'){
            $office->office_type = 0 ;
           }elseif($request->office_type == 'hot'){
               $office->office_type = 1 ;
           }else{
               $office->office_type = 2 ;
           }

           $office->save();

//        Session::flash('success',' Your Office now Created');

           return redirect()->back();

    }

    public function images($id)
    {
        return view('offices.images.create')->withId($id);
    }

    public function postImages(Request $request,$id)
    {
//        dd($request->file('images'));
//        $this->validate($request,[
//            'images' => 'mimes:jpg,jpeg,png,dmp'
//        ]);

        $images = (array) $request->file('images') ;
        foreach ($images as $image){
            $image_name = time().$image->getClientOriginalName().'.'.$image->getClientOriginalExtension() ;
            $image->move(public_path('/images'),$image_name);
            $building_image = new Images() ;
            $building_image->image_url = $image_name ;
            $building_image->building_id = $id ;
            $building_image->save();
        }
//        Session::flash('success',' Images Added Successfully');


        return redirect()->route('create.additional',['id'=>$id]);

    }


    public function additional($id)
    {
        return view('offices.additional.create')->withId($id);
    }

    public function postAdditional(Request $request,$id)
    {
//        dd($request);

//        $this->validate($request ,array(
//            'highlight'=>'required',
//            'description'=>'required'
//        ));

        $building = Building::find($id);
        $user = \App\User::find(1);
        $user->notify(new NewBuilding($user,$building));

        $addtional = new Additional() ;
        $addtional->additional = json_encode([
            'highlight' =>$request->highlight,
            'description' => $request->description,
        ]);
        $addtional->exclusive_office = $request->exlusive_office ;
        $addtional->building_id = $id;
        $addtional->save();

//        Session::flash('success',' Now Your Building is Live');

//        dd("success");
        return redirect()->route('hola');

    }
}
