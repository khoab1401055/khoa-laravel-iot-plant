<?php

namespace App\Http\Controllers;

use App\Models\Farms;
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

    public function goToFarm(Request $request)
    {
        // component_exists();
        $farm = Farms::with('customer','activeFarmLocation')->where('name_code', $request->name)->first();
        if (!$farm) {
            abort(404);
        }
        return view('pages.goto_farm',compact('farm'));
    }
}
