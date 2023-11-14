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

    /*------------ PRODUCTOS - STAR ------------*/

    public function peruproductos()
    {
        return view('zoelife/peru.productos');
    }

    public function perucoffee3en1()
    {
        return view('zoelife/peru.coffee-3-en-1');
    }

    public function peruharinademoringa()
    {
        return view('zoelife/peru.harina-de-moringa');
    }

    public function perupower()
    {
        return view('zoelife/peru.power');
    }
    
    /*------------ PRODUCTOS - END ------------*/

    public function perutestimonios()
    {
        return view('zoelife/peru.testimonios');
    }

    public function perucentros()
    {
        return view('zoelife/peru.centros-de-distribucion');
    }

    public function perueventos()
    {
        return view('zoelife/peru.eventos');
    }

    public function perucentroslima()
    {
        return view('zoelife/peru.centros-de-distribucion-lima');
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
