<?php

namespace App\Http\Controllers;

use App\Models\LocalSale;
use Illuminate\Http\Request;
use Modules\CMS\Entities\CmsSection;
use Modules\CMS\Entities\CmsSectionItem;
use Modules\CMS\Entities\CmsTestimony;
use Modules\Onlineshop\Entities\OnliItem;

class BoliviaController extends Controller
{
    public function inicio()
    {
        $slider = CmsSection::where('component_id', 'bolivia_slider_inicio_15')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();

        $sliderMobil = CmsSection::where('component_id', 'peru_slider_inicio_mobil_116')
                ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();

        $video = CmsSection::where('component_id', 'bolivia_video_presentacion_inicio_18')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->first();


        $fundador = CmsSection::where('component_id', 'zoe_fundador_area_95')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();

        $equipos = CmsSectionItem::with('item.items')->where('section_id', 66)
            ->orderBy('position')
            ->get();

        $linkDescarga = CmsSection::where('component_id', 'bolivia_descargas_90')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();


        return view('zoelife/bolivia.index', [
            'slider' => $slider,
            'sliderMobil' => $sliderMobil,
            'video' => $video,
            'fundador' => $fundador,
            'equipos' => $equipos,
            'linkDescarga' => $linkDescarga
        ]);
    }

    /*------------ PRODUCTOS - STAR ------------*/

    public function productos($id = 1)
    {
        $banner = CmsSection::where('component_id', 'bolivia_banner_productos_21')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->first();

        $beneficiop = CmsSection::where('component_id', 'bolivia_beneficio_productos_79')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();

        $productos = OnliItem::join('countries', 'onli_items.country_id', '=', 'countries.id')
            ->join('products', 'products.id', 'onli_items.item_id')
            ->join('product_categories', function ($query) use ($id) {
                $query->on('product_categories.product_id', 'products.id')
                    ->where('category_id', $id);
            })
            ->where('countries.description', 'Bolivia')
            ->select('onli_items.name', 
            'onli_items.image', 
            'onli_items.id',
            'onli_items.item_id',
            'products.description as nameporduct',
            'onli_items.description'
            )
            ->get();

        return view('zoelife/bolivia.productos', [
            'banner' => $banner,
            'beneficiop' => $beneficiop,
            'productos' => $productos,
            'categoryId' => $id
        ]);
    }

    public function productodescripcion($id)
    {
        $product = OnliItem::where('id', $id)->first();
        $testimonies = CmsTestimony::where('item_id', $id)->get();

        return view('zoelife/bolivia.producto-descripcion', [
            'product' => $product,
            'testimonies' => $testimonies
        ]);
    }


    /*------------ PRODUCTOS - END ------------*/

    public function testimonios()
    {
        $banner = CmsSection::where('component_id', 'bolivia_banner_testimonios_22')
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

        $testimonies = CmsTestimony::with('product')->inRandomOrder()->take(20)->get();

        return view('zoelife/bolivia.testimonios', [
            'banner'        => $banner,
            'products'      => $products,
            'testimonies'   => $testimonies
        ]);
    }

    public function centros()
    {
        $banner = CmsSection::where('component_id', 'bolivia_banner_centros_de_distribucion_23')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->first();

        $centers = LocalSale::with('district.department')->where('country_id', 2)->get();

        $departments = LocalSale::join('districts', 'ubigeo', 'districts.id')
            ->join('departments', 'districts.department_id', 'departments.id')
            ->join('countries', 'departments.country_id', 'countries.id')
            ->select('districts.department_id', 'departments.name')
            ->where('departments.country_id', 2)
            ->groupBy('departments.name', 'districts.department_id')
            ->get();

        return view('zoelife/bolivia.centros-de-distribucion', [
            'banner' => $banner,
            'centers' => $centers,
            'departments' => $departments
        ]);
    }

    public function eventos()
    {
        $slider = CmsSection::where('component_id', 'bolivia_slider_emprendimiento_133')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();

        $beneficios = CmsSectionItem::with('item.items')->where('section_id', 135)  //cambiar el id de la seccion ->sedes ubicacion 24
                ->orderBy('position')
                ->get();






        $galeryEvents = CmsSectionItem::with('item.items')->where('section_id', 76)
        ->orderBy('position')
        ->get();
        //$galeryEvents->prepend(null);

        $inscripcioncontacto = CmsSection::where('component_id', 'bolivia_eventos_inscripcion_contacto_100')
        ->join('cms_section_items', 'section_id', 'cms_sections.id')
        ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
        ->select(
            'cms_items.content',
            'cms_section_items.position'
        )
        ->orderBy('cms_section_items.position')
        ->get();

        return view('zoelife/bolivia.eventos', [
            'slider' => $slider,
            'beneficios' => $beneficios,
            'galeryEvents' => $galeryEvents,
            'inscripcioncontacto' => $inscripcioncontacto
        ]);
    }

    public function estrellas()
    {
        $banner = CmsSection::where('component_id', 'bolivia_banner_alcanzando_las_estrellas_25')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->first();

        $presentacion = CmsSection::where('component_id', 'peru_presentacion_alcanzando_las_estrellas_84')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();

        $stars = CmsSectionItem::with('item.items')->where('section_id', 85) //peru_galeria_alcanzando_las_estrellas_85
            ->orderBy('position')
            ->get();

        $star_videos = CmsSectionItem::with('item.items')->where('section_id', 87) //peru_videos_alcanzando_las_estrellas_87
            ->orderBy('position')
            ->get();

        return view('zoelife/bolivia.alcanzando-las-estrellas', [
            'banner' => $banner,
            'presentacion' => $presentacion,
            'stars' => $stars,
            'star_videos' => $star_videos
        ]);
    }

    public function university()
    {
        $banner = CmsSection::where('component_id', 'bolivia_banner_university_104')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->first();

        return view('zoelife/bolivia.zoe-university', [
            'banner' => $banner
        ]);
    }

    public function contacto()
    {
        $banner = CmsSection::where('component_id', 'bolivia_banner_contacto_26')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->first();

        $datosContacto = CmsSection::where('component_id', 'bolivia_datos_contacto_108')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();

        return view('zoelife/bolivia.contacto', [
            'banner' => $banner,
            'datosContacto' => $datosContacto
        ]);
    }
}
