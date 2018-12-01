<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gudang;
use App\Barang;
use App\Session;
use App\User;

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
        $gudangs = Gudang::all();
        $gudangs1 = Gudang::count();

        $barangs = Barang::all();
        $barangs1 = Barang::count();
        return view('home', compact('gudangs', 'gudangs1', 'barangs', 'barangs1', 'data'));
    }
}
