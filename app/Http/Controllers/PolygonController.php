<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PolygonController extends Controller
{

    public function index()
    {
        dd(Auth::user());
        return view('polygon.index');
    }
}
