<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        return view('zoelife/index');
    }

    public function peruinicio()
    {
        return view('zoelife/peru.index');
    }
}
