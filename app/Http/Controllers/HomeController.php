<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $users = User::with('permissions', 'roles')->get();
        return view('home',compact('users'));
    }

    public function changeLanguage($locale)
    {

        if (array_key_exists($locale, config('app.locales'))) {
            session()->put('locale', $locale);
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
    public function provincesAPI(){
        $url = 'https://provinces.open-api.vn/api/';
        $response = Http::get($url, ['depth' => 3]);
        if ($response->failed()) {
            return response()->json(['error' => 'Failed to fetch data from the API'], 500);
        }

        // Lấy dữ liệu từ kết quả trả về
        $data = $response->json();
        foreach ($data as $provinceData) {
            $province = Province::create([
                'name' => $provinceData['name'],
                'code' => $provinceData['code'],
                'codename' => $provinceData['codename'],
                'division_type' => $provinceData['division_type'],
                'phone_code' => $provinceData['phone_code'],
            ]);

            foreach ($provinceData['districts'] as $districtData) {
                $district = $province->districts()->create([
                    'name' => $districtData['name'],
                    'code' => $districtData['code'],
                    'codename' => $districtData['codename'],
                    'division_type' => $districtData['division_type'],
                    'short_codename' => $districtData['short_codename'], // New field short_codename
                ]);

                foreach ($districtData['wards'] as $wardData) {
                    $district->wards()->create([
                        'name' => $wardData['name'],
                        'code' => $wardData['code'],
                        'codename' => $wardData['codename'],
                        'division_type' => $wardData['division_type'],
                        'short_codename' => $wardData['short_codename'], // New field short_codename
                    ]);
                }
            }
        }

        // Lấy danh sách các tỉnh thành từ dữ liệu
        $provinces = $data;
        return $provinces;
    }

}

