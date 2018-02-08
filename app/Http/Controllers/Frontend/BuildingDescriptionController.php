<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BuildingDescriptionController extends Controller
{
    //

    public function index()
    {
        return view('building-details.index');
    }
}
