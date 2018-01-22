<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Additional;
use App\Models\Images;
use App\Models\Office;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Building ;
class BuildingController extends Controller
{
    //

    public function showBuildings()
    {
        // TODO user validation
//        $building =Building::all();
//        return view('show_buildings');
    }

    public function index()
    {

        return view('index');
    }



    public function postBuilding(Request $request)
    {
//        dd($request->except('_token'));

        $building = new Building();
        $building->name = $request->name ;
        $building->full_address =  $request->full_address ;
        $building->welcome_message = $request->welcome_message ;
        $building->about_us  =  $request->about_us ;
        $building->postcode = $request->postcode ;
        $building->facilities = json_encode($request->facilities);
        $building->save();
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


           return redirect()->back();

    }

    public function images($id)
    {
        return view('offices.images.create')->withId($id);
    }

    public function postImages(Request $request,$id)
    {
//        dd($request->file('images'));
        $images = (array) $request->file('images') ;
        foreach ($images as $image){
            $image_name = time().$image->getClientOriginalName().'.'.$image->getClientOriginalExtension() ;
            $image->move(public_path('/images'),$image_name);
            $building_image = new Images() ;
            $building_image->image_url = $image_name ;
            $building_image->building_id = $id ;
            $building_image->save();
        }


        return redirect()->route('create.additional',['id'=>$id]);

    }


    public function additional($id)
    {
        return view('offices.additional.create')->withId($id);
    }

    public function postAdditional(Request $request,$id)
    {
//        dd($request);
        $addtional = new Additional() ;
        $addtional->additional = json_encode([
            'highlight' =>$request->highlight,
            'description' => $request->description,
        ]);
        $addtional->exclusive_office = $request->exlusive_office ;
        $addtional->building_id = $id;
        $addtional->save();


        return redirect()->route();

    }
}
