<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Building;
use App\Models\Office;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //

    public function index()
    {


        $F_buildings = $this->get_Buildings(2); //get all buildings with Fixed Desk Offices
        $H_buildings = $this->get_Buildings(1); //get all buildings with Hot Offices
        $P_buildings = $this->get_Buildings(0); //get all buildings with Private Offices
        $L_buildings = Building::all()->last()->take(4)->get();


        return view('frontPages.index')
            ->with('F_buildings',$F_buildings)
            ->with('P_buildings',$P_buildings)
            ->with('H_buildings',$H_buildings)
            ->with('L_buildings',$L_buildings);
    }

    public function get_Buildings($type){
        //type is the type of the office
        //0 Private, 1 Hot , 2 Fixed
        $count = 0;
        $buildings = []; //return value
        $offices = Office::where('office_type' , $type)->latest()->get(); //get all offices

        //check redundancy
        foreach ($offices as $office){
            //break condition after finding 3 different buildings
            if($count == 3){
                break;
            }
            //Push first Building into empty array
            if(sizeof($buildings) == 0) {
                $building = Building::find($office->building_id);
                array_push($buildings,$building);
                $count++;
            }
            else{
                foreach ($buildings as $building){
                    if($building->id == $office->building_id )
                    {
                        break;
                    }
                    else{
                        $building = Building::find($office->building_id);
                        array_push($buildings,$building);
                        $count++;
                        break;
                    }
                }
            }
        }
        return $buildings;
    }
}
