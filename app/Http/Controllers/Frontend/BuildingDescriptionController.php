<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Building;
use App\Models\Facility;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BuildingDescriptionController extends Controller
{
    //

    public function index()
    {
        $building  = Building::find(3);
        $B_facilities = Facility::all()->where('type',0);
        $A_facilities = Facility::all()->where('type',1);
        $highlight = json_decode($building->addtionals->additional);

        return view('building-details.index')
            ->with('building',$building)
            ->with('A_facilities',$A_facilities)
            ->with('B_facilities',$B_facilities)
            ->with('highlights',$highlight);
    }
}
