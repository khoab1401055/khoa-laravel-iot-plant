<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

}

