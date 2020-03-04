<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
    public function index(Request $request)
    {
        // DD($request->email);
        $request->user()->authorizeRoles(['admin', 'pharmacist', 'customer']);
        if ($request->user()->hasRole('admin'))
        {
            return view('admin.dashboard');
        }
        if ($request->user()->hasRole('pharmacist')){
            return view('pharmacist.dashboard');
        }
        if ($request->user()->hasRole('customer')){
            return view('customer.dashboard');
        }
        // return view('/');
    }
}
