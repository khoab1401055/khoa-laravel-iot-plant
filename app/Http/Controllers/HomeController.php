<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('home');
    }

    public function changeLanguage($locale)
    {

        if (array_key_exists($locale, config('app.locales'))) {
            session()->put('locale', $locale);
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }

}

