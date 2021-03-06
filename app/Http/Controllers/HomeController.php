<?php

namespace Swapsies\Http\Controllers;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function addSwap()
    {
        return view('addSwap');
    }

     public function addRota()
    {
        return view('addRota');
    }

     public function import(Request $request) 
     {
        //validate the xls file
        echo "IMPORT";
     }

}
