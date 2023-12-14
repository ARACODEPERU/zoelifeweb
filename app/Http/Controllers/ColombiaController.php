<?php

namespace App\Http\Controllers;

use App\Models\LocalSale;
use Illuminate\Http\Request;
use Modules\CMS\Entities\CmsSection;
use Modules\CMS\Entities\CmsTestimony;
use Modules\Onlineshop\Entities\OnliItem;

class ColombiaController extends Controller
{
    public function inicio()
    {
        $slider = CmsSection::where('component_id', 'ecuador_slider_inicio_28')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();

        $video = CmsSection::where('component_id', 'ecuador_video_presentacion_inicio_31')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->first();

        return view('zoelife/colombia.index', [
            'slider' => $slider,
            'video' => $video
        ]);
    }

    public function nosotros()
    {
        $banner = CmsSection::where('component_id', 'ecuador_banner_nosotros_33')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->first();

        $video = CmsSection::where('component_id', 'ecuador_video_presentacion_nosotros_32')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->first();

        return view('zoelife/colombia.nosotros', [
            'banner' => $banner,
            'video' => $video
        ]);
    }

    /*------------ PRODUCTOS - STAR ------------*/

    public function productos()
    {
        $banner = CmsSection::where('component_id', 'ecuador_banner_productos_34')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->first();


        return view('zoelife/colombia.productos', [
            'banner' => $banner
        ]);
    }

    public function productodescripcion($id)
    {
        $product = OnliItem::where('id', $id)
            ->first();

        $testimonies = CmsTestimony::where('item_id', $id)->get();

        return view('zoelife/colombia.producto-descripcion', [
            'product' => $product,
            'testimonies' => $testimonies
        ]);
    }


    /*------------ PRODUCTOS - END ------------*/

    public function testimonios()
    {
        $banner = CmsSection::where('component_id', 'ecuador_banner_testimonios_35')
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

        return view('zoelife/colombia.testimonios', [
            'banner'        => $banner,
            'products'      => $products,
            'testimonies'   => $testimonies
        ]);
    }

    public function centros()
    {
        $banner = CmsSection::where('component_id', 'ecuador_banner_centros_de_distribucion_36')
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

        return view('zoelife/colombia.centros-de-distribucion', [
            'banner' => $banner,
            'centers' => $centers,
            'departments' => $departments
        ]);
    }

    public function eventos()
    {
        $banner = CmsSection::where('component_id', 'ecuador_banner_eventos_37')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->first();
        return view('zoelife/colombia.eventos', [
            'banner' => $banner
        ]);
    }

    public function centroslima()
    {
        return view('zoelife/colombia.centros-de-distribucion-lima');
    }

    public function estrellas()
    {
        $banner = CmsSection::where('component_id', 'ecuador_banner_alcanzando_las_estrellas_38')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->first();


        return view('zoelife/colombia.alcanzando-las-estrellas', [
            'banner' => $banner
        ]);
    }

    public function contacto()
    {
        $banner = CmsSection::where('component_id', 'ecuador_banner_contacto_39')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->first();

        return view('zoelife/colombia.contacto', [
            'banner' => $banner
        ]);
    }
}
