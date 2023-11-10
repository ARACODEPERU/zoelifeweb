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

    public function perucentros()
    {
        return view('zoelife/peru.centros-de-distribucion');
    }

    public function peruestrellas()
    {
        return view('zoelife/peru.alcanzando-las-estrellas');
    }

    public function perucontacto()
    {
        return view('zoelife/peru.contacto');
    }
}
