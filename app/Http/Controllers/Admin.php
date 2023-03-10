<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class Admin extends Controller
{
    public function index()
    {
        return View('main2');
    }
}
