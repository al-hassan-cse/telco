<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Outlet;

class MapController extends Controller
{
    public function gmaps()
    {
    	$locations = Outlet::get();
    	return view('gmaps',compact('locations'));
    }
}
