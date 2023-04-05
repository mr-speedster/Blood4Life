<?php

namespace App\Http\Controllers;

use App\Models\Donation;
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
     * Show the application home.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $donation = Donation::orderby('updated_at','desc')->get();
        return view('home',['donations'=>$donation]);
    }

    public function adminHome()
    {
        $donation = Donation::orderby('updated_at','desc')->get();
        return view('admin.home',['donations'=>$donation]);
    }
}
