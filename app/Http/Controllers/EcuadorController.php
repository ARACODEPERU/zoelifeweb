<?php

namespace App\Http\Controllers;

use App\Models\LocalSale;
use Illuminate\Http\Request;
use Modules\CMS\Entities\CmsPage;
use Modules\CMS\Entities\CmsSection;
use Modules\CMS\Entities\CmsTestimony;
use Modules\Onlineshop\Entities\OnliItem;

class EcuadorController extends Controller
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

        return view('zoelife/ecuador.index', [
            'slider' => $slider,
            'video' => $video
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

        return view('zoelife/ecuador.nosotros', [
            'banner' => $banner,
            'video' => $video
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


        return view('zoelife/ecuador.productos', [
            'banner' => $banner
        ]);
    }

    public function productodescripcion($id)
    {
        $product = OnliItem::where('id', $id)->first();
        $testimonies = CmsTestimony::where('item_id', $id)->get();

        return view('zoelife/ecuador.producto-descripcion', [
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

        $products = OnliItem::where('status', true)->get();

        $testimonies = CmsTestimony::with('product')->get();

        return view('zoelife/ecuador.testimonios', [
            'banner'        => $banner,
            'products'      => $products,
            'testimonies'   => $testimonies
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
            ->select('districts.department_id', 'departments.name')
            ->groupBy('departments.name', 'districts.department_id')
            ->get();

        return view('zoelife/ecuador.centros-de-distribucion', [
            'banner' => $banner,
            'centers' => $centers,
            'departments' => $departments
        ]);
    }

    public function eventos()
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
        return view('zoelife/ecuador.eventos', [
            'banner' => $banner
        ]);
    }

    public function centroslima()
    {
        return view('zoelife/ecuador.centros-de-distribucion-lima');
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


        return view('zoelife/ecuador.alcanzando-las-estrellas', [
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

        return view('zoelife/ecuador.contacto', [
            'banner' => $banner
        ]);
    }
}
