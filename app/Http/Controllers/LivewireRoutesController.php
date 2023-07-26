<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivewireRoutesController extends Controller
{
    public function devicesList()
    {
        // component_exists();
        return view('pages.device_list');
    }
    public function devicesAdd()
    {
        // component_exists();
        return view('pages.device_add');
    }
    public function farmsList()
    {
        // component_exists();
        return view('pages.farm_list');
    }

}
