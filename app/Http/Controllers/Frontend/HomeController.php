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

        $private_offices = Office::where('office_type' , 0)->latest()->take(3)->get();
        $hot_desks       = Office::where('office_type' , 1)->latest()->take(3)->get();
        $fixed_desks     = Office::where('office_type' , 2)->latest()->take(3)->get();

        $P_buildings = [];
        foreach ($private_offices as $office){
            $building = Building::find($office->building_id);
            array_push($P_buildings,$building);
        }

        $H_buildings = [];
        foreach ($hot_desks as $office){
            $building = Building::find($office->building_id);
            array_push($H_buildings,$building);
        }

        $F_buildings = [];
        foreach ($fixed_desks as $office){
            $building = Building::find($office->building_id);
            array_push($F_buildings,$building);
        }

        $L_buildings = Building::all()->last()->take(4)->get();






        return view('frontPages.index')
            ->with('F_buildings',$F_buildings)
            ->with('P_buildings',$P_buildings)
            ->with('H_buildings',$H_buildings)
            ->with('L_buildings',$L_buildings);
    }
}
