<?php

namespace App\Http\Controllers;

use App\Models\LocalSale;
use Illuminate\Http\Request;
use Modules\CMS\Entities\CmsSection;
use Modules\CMS\Entities\CmsSectionItem;
use Modules\CMS\Entities\CmsTestimony;
use Modules\Onlineshop\Entities\OnliItem;

class PeruController extends Controller
{
    public function inicio()
    {
        $slider = CmsSection::where('component_id', 'peru_slider_inicio_2')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();

        $video = CmsSection::where('component_id', 'peru_video_presentacion_inicio_4')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->first();


        $equipos = CmsSectionItem::with('item.items')->where('section_id', 66)
            ->orderBy('position')
            ->get();


        return view('zoelife/peru.index', [
            'slider' => $slider,
            'video' => $video,
            'equipos' => $equipos
        ]);
    }

    public function nosotros()
    {
        $banner = CmsSection::where('component_id', 'peru_banner_nosotros_7')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->first();

        $video = CmsSection::where('component_id', 'peru_video_presentacion_nosotros_6')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->first();


        $equipos = CmsSectionItem::with('item.items')->where('section_id', 66)
            ->orderBy('position')
            ->get();
        //dd($equipos);
        return view('zoelife/peru.nosotros', [
            'banner' => $banner,
            'video' => $video,
            'equipos' => $equipos,
        ]);
    }

    /*------------ PRODUCTOS - STAR ------------*/

    public function productos()
    {
        $banner = CmsSection::where('component_id', 'peru_banner_productos_8')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->first();

        $beneficiop = CmsSection::where('component_id', 'peru_beneficio_productos_78')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();

        $productos = OnliItem::join('countries', 'onli_items.country_id', '=', 'countries.id')
            ->where('countries.description', 'Perú')
            ->select('onli_items.name', 'onli_items.image', 'onli_items.id')
            ->get();

        return view('zoelife/peru.productos', [
            'banner' => $banner,
            'beneficiop' => $beneficiop,
            'productos' => $productos,
        ]);
    }

    public function productodescripcion($id)
    {
        $product = OnliItem::where('id', $id)->first();
        $testimonies = CmsTestimony::where('item_id', $id)->get();

        return view('zoelife/peru.producto-descripcion', [
            'product' => $product,
            'testimonies' => $testimonies
        ]);
    }


    /*------------ PRODUCTOS - END ------------*/

    public function testimonios()
    {
        $banner = CmsSection::where('component_id', 'peru_banner_testimonios_9')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->first();

        $products = OnliItem::whereIn('id', function ($query) {
            $query->selectRaw('MIN(id)')
                ->from('onli_items')
                ->where('status', true)
                ->groupBy('name');
        })
            ->get();

        // $testimonies = CmsTestimony::with('product')->get();
        $testimonies = CmsTestimony::with('product')->inRandomOrder()->take(5)->get();


        //$testimonies->prepend(null);
        return view('zoelife/peru.testimonios', [
            'banner'        => $banner,
            'products'      => $products,
            'testimonies'   => $testimonies,
            'elementos_paginator_v' => 4
        ]);
    }

    public function centros()
    {
        $banner = CmsSection::where('component_id', 'peru_banner_centros_de_distribucion_10')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->first();

        $centers = LocalSale::with('district.department')->where('country_id', 1)->get();

        $departments = LocalSale::join('districts', 'ubigeo', 'districts.id')
            ->join('departments', 'districts.department_id', 'departments.id')
            ->join('countries', 'departments.country_id', 'countries.id')
            ->select('districts.department_id', 'departments.name')
            ->where('departments.country_id', 1)
            ->groupBy('departments.name', 'districts.department_id')
            ->get();

        return view('zoelife/peru.centros-de-distribucion', [
            'banner' => $banner,
            'centers' => $centers,
            'departments' => $departments
        ]);
    }

    public function eventos()
    {
        $this->elementos_paginator = 4; //numero de elementos por vista
        $banner = CmsSection::where('component_id', 'peru_banner_eventos_11')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->first();


        $galeryEvents = CmsSectionItem::with('item.items')->where('section_id', 76)
            ->orderBy('position')
            ->get();
        $galeryEvents->prepend(null);

        $inscripcioncontacto = CmsSection::where('component_id', 'peru_eventos_inscripcion_contacto_83')
        ->join('cms_section_items', 'section_id', 'cms_sections.id')
        ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
        ->select(
            'cms_items.content',
            'cms_section_items.position'
        )
        ->orderBy('cms_section_items.position')
        ->get();

        $elementos_paginator = 4; //cantidad de elementos a mostrar
        return view('zoelife/peru.eventos', [
            'banner' => $banner,
            'galeryEvents' => $galeryEvents,
            'inscripcioncontacto' => $inscripcioncontacto,
            'elementos_paginator' => $elementos_paginator
        ]);
    }

    public function centroslima()
    {
        return view('zoelife/peru.centros-de-distribucion-lima');
    }

    public function estrellas()
    {
        $banner = CmsSection::where('component_id', 'peru_banner_alcanzando_las_estrellas_12')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->first();

            $stars = CmsSectionItem::with('item.items')->where('section_id', 85) //peru_galeria_alcanzando_las_estrellas_85
            ->orderBy('position')
            ->get();

            $star_videos = CmsSectionItem::with('item.items')->where('section_id', 87) //peru_videos_alcanzando_las_estrellas_87
            ->orderBy('position')
            ->get();

            $stars->prepend(null);
            $star_videos->prepend(null);
            $elementos_paginator = 4; //cantidad de elementos a mostrar
            $elementos_paginator_v = 2; //para videos

        return view('zoelife/peru.alcanzando-las-estrellas', [
            'banner' => $banner,
            'stars' => $stars,
            'star_videos' => $star_videos,
            'elementos_paginator' => $elementos_paginator,
            'elementos_paginator_v' => $elementos_paginator_v
        ]);
    }

    public function university()
    {
        $banner = CmsSection::where('component_id', 'peru_banner_university_77')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->first();

        return view('zoelife/peru.zoe-university', [
            'banner' => $banner
        ]);
    }

    public function contacto()
    {
        $banner = CmsSection::where('component_id', 'peru_banner_contacto_13')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->first();

        $datosContacto = CmsSection::where('component_id', 'peru_datos_contacto_94')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();

        return view('zoelife/peru.contacto', [
            'banner' => $banner,
            'datosContacto' => $datosContacto
        ]);
    }
}
