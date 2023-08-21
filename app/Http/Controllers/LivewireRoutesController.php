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

    public function farmAdd()
    {
        // component_exists();
        return view('pages.farm_add');
    }

    public function masterData()
    {
        // component_exists();
        return view('pages.master_data');
    }
    public function Monitoring()
    {
        // component_exists();
        return view('pages.monitoring');
    }

    public function accountList()
    {
        // component_exists();
        return view('pages.accountList');
    }
    public function accountsReport()
    {
        // component_exists();
        return view('pages.accounts_report');
    }
    public function dataLanguage()
    {
        // component_exists();
        return view('pages.data_language');
    }


    public function goToFarm(Request $request)
    {
        // component_exists();
        $farm = Farms::with('customer', 'activeFarmLocation', 'sensorNodes')->where('name_code', $request->name)->first();
        if (!$farm) {
            abort(404);
        }
        return view('pages.goto_farm', compact('farm'));
    }
}
