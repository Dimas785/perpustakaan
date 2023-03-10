<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku as ModelsBuku;

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
        $data = ModelsBuku::orderBy('judul_buku', 'desc')->get();
        return view('main2')->with('data', $data);
    }
}
