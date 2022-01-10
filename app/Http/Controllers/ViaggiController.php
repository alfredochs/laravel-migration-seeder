<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViaggiController extends Controller
{
    function index()
    {
        return view('viaggi.index');
    }

    function details()
    {
        return view('viaggi.details');
    }
}
