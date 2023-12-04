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
        // return view('home');
        // return view('dashboard/home');


        switch (auth()->user()->role->name) {
            case 'admin':
                return redirect()->route('admin.dashboard');
                break;

            case 'receptionist':
                return redirect()->route('receptionist.dashboard');
                break;

            case 'customer':
                return redirect()->route('customer.dashboard');
                break;

            default:
                return redirect()->route('login');
                break;
        }

    }
}
