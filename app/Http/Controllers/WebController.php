<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\CMS\Entities\CmsPage;
use Modules\CMS\Entities\CmsSection;

class WebController extends Controller
{
    public function index()
    {
        $pages = CmsPage::with('country')
            ->where('status', true)
            ->where('main', true)
            ->whereNotNull('country_id')
            ->get();

        return view('zoelife/index', [
            'pages' => $pages
        ]);
    }

    public function peruinicio()
    {
        $slider = CmsSection::where('component_id', 'peru_slider_principal_1')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();

        //dd($slider);
        return view('zoelife/peru.index', [
            'slider' => $slider
        ]);
    }

    public function perunosotros()
    {
        return view('zoelife/peru.nosotros');
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

    public function perualkalino()
    {
        return view('zoelife/peru.alkalino');
    }

    public function peruaceitemoringa()
    {
        return view('zoelife/peru.aceite-de-moringa');
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
