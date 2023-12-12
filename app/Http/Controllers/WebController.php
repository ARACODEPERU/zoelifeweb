<?php

namespace App\Http\Controllers;

use App\Models\LocalSale;
use Illuminate\Http\Request;
use Modules\CMS\Entities\CmsPage;
use Modules\CMS\Entities\CmsSection;
use Modules\CMS\Entities\CmsTestimony;
use Modules\Onlineshop\Entities\OnliItem;

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

        $pages = CmsPage::with('country')
            ->where('status', true)
            ->where('main', true)
            ->whereNotNull('country_id')
            ->get();

        return view('zoelife/peru.index', [
            'slider' => $slider,
            'video' => $video,
            'pages' => $pages
        ]);
    }

    public function perunosotros()
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

        $pages = CmsPage::with('country')
            ->where('status', true)
            ->where('main', true)
            ->whereNotNull('country_id')
            ->get();

        return view('zoelife/peru.nosotros', [
            'banner' => $banner,
            'video' => $video,
            'pages' => $pages
        ]);
    }

    /*------------ PRODUCTOS - STAR ------------*/

    public function peruproductos()
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


        $pages = CmsPage::with('country')
            ->where('status', true)
            ->where('main', true)
            ->whereNotNull('country_id')
            ->get();

        return view('zoelife/peru.productos', [
            'banner' => $banner,
            'pages' => $pages
        ]);
    }

    public function peruproductodescripcion($id)
    {
        $product = OnliItem::where('id', $id)->first();
        $testimonies = CmsTestimony::where('item_id', $id)->get();

        return view('zoelife/peru.producto-descripcion', [
            'product' => $product,
            'testimonies' => $testimonies
        ]);
    }


    /*------------ PRODUCTOS - END ------------*/

    public function perutestimonios()
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


        $pages = CmsPage::with('country')
            ->where('status', true)
            ->where('main', true)
            ->whereNotNull('country_id')
            ->get();

        $products = OnliItem::where('status', true)->get();

        $testimonies = CmsTestimony::with('product')->get();

        return view('zoelife/peru.testimonios', [
            'banner'        => $banner,
            'pages'         => $pages,
            'products'      => $products,
            'testimonies'   => $testimonies
        ]);
    }

    public function perucentros()
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


        $pages = CmsPage::with('country')
            ->where('status', true)
            ->where('main', true)
            ->whereNotNull('country_id')
            ->get();

        $centers = LocalSale::with('district.department')->where('country_id', 1)->get();

        $departments = LocalSale::join('districts', 'ubigeo', 'districts.id')
            ->join('departments', 'districts.department_id', 'departments.id')
            ->select('districts.department_id', 'departments.name')
            ->groupBy('departments.name', 'districts.department_id')
            ->get();

        return view('zoelife/peru.centros-de-distribucion', [
            'banner' => $banner,
            'pages' => $pages,
            'centers' => $centers,
            'departments' => $departments
        ]);
    }

    public function perueventos()
    {
        $banner = CmsSection::where('component_id', 'peru_banner_eventos_11')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->first();


        $pages = CmsPage::with('country')
            ->where('status', true)
            ->where('main', true)
            ->whereNotNull('country_id')
            ->get();

        return view('zoelife/peru.eventos', [
            'banner' => $banner,
            'pages' => $pages
        ]);
    }

    public function perucentroslima()
    {
        return view('zoelife/peru.centros-de-distribucion-lima');
    }

    public function peruestrellas()
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


        $pages = CmsPage::with('country')
            ->where('status', true)
            ->where('main', true)
            ->whereNotNull('country_id')
            ->get();

        return view('zoelife/peru.alcanzando-las-estrellas', [
            'banner' => $banner,
            'pages' => $pages
        ]);
    }

    public function perucontacto()
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


        $pages = CmsPage::with('country')
            ->where('status', true)
            ->where('main', true)
            ->whereNotNull('country_id')
            ->get();

        return view('zoelife/peru.contacto', [
            'banner' => $banner,
            'pages' => $pages
        ]);
    }




    public function boliviainicio()
    {
        return view('zoelife/bolivia.index');
    }

    public function ecuadorinicio()
    {
        return view('zoelife/ecuador.index');
    }
}
