<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Objectt;
use App\Models\Region;
use Illuminate\Http\Request;

class SidebarController extends Controller
{
    public function index()
    {
        $regions = Region::all();
        $districts = District::all();
        $objects = Objectt::all();
        return view('index', compact('regions', 'districts', 'objects'));
    }
}
