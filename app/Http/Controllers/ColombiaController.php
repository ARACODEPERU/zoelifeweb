<?php

namespace App\Http\Controllers;

use App\Models\LocalSale;
use Illuminate\Http\Request;
use Modules\CMS\Entities\CmsSection;
use Modules\CMS\Entities\CmsSectionItem;
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

        $sliderMobil = CmsSection::where('component_id', 'peru_slider_inicio_mobil_116')
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

        $linkDescarga = CmsSection::where('component_id', 'colombia_descargas_92')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();

        return view('zoelife/colombia.index', [
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
        $banner = CmsSection::where('component_id', 'colombia_banner_productos_47')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->first();

        $beneficiop = CmsSection::where('component_id', 'colombia_beneficio_productos_81')
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
            ->where('countries.description', 'Colombia')
            ->select(
                'onli_items.name',
                'onli_items.image',
                'onli_items.id',
                'onli_items.item_id',
                'products.description as nameporduct',
                'onli_items.description'
            )
            ->get();

        return view('zoelife/colombia.productos', [
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

        $products = OnliItem::whereIn('id', function ($query) {
            $query->selectRaw('MIN(id)')
                ->from('onli_items')
                ->where('status', true)
                ->groupBy('name');
        })
            ->get();

        // $testimonies = CmsTestimony::with('product')->inRandomOrder()->take(20)->get();
        $testimonies = CmsTestimony::with('product')->orderBy('id', 'DESC')->take(20)->get();

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

        $centers = LocalSale::with('district.department')->where('country_id', 4)->get();

        $departments = LocalSale::join('districts', 'ubigeo', 'districts.id')
            ->join('departments', 'districts.department_id', 'departments.id')
            ->join('countries', 'departments.country_id', 'countries.id')
            ->select('districts.department_id', 'departments.name')
            ->where('departments.country_id', 4)
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
        $slider = CmsSection::where('component_id', 'colombia_slider_emprendimiento_149')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();


        $beneficios = CmsSectionItem::with('item.items')->where('section_id', 151)  //cambiar el id de la seccion ->sedes ubicacion 24
            ->orderBy('position')
            ->get();

        $formasTitle = CmsSection::where('component_id', 'colombia_titulo_formas_ganar_emprendimiento_152')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();

        $formasContenido = CmsSectionItem::with('item.items')->where('section_id', 153)  //cambiar el id de la seccion ->sedes ubicacion 24
            ->orderBy('position')
            ->get();

        $star_videos = CmsSectionItem::with('item.items')->where('section_id', 154) //peru_videos_alcanzando_las_estrellas_87
            ->orderBy('position')
            ->get();


        $galeryEvents = CmsSectionItem::with('item.items')->where('section_id', 98)
            ->orderBy('position')
            ->get();
        //$galeryEvents->prepend(null);

        // $inscripcioncontacto = CmsSection::where('component_id', 'ecuador_eventos_inscripcion_contacto_101')
        // ->join('cms_section_items', 'section_id', 'cms_sections.id')
        // ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
        // ->select(
        //     'cms_items.content',
        //     'cms_section_items.position'
        // )
        // ->orderBy('cms_section_items.position')
        // ->get();

        $tuExito = CmsSection::where('component_id', 'colombia_tu_Exito_emprendimiento_155')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();


        $comunidad = CmsSectionItem::with('item.items')->where('section_id', 156)  //cambiar el id de la seccion ->sedes ubicacion 24
            ->orderBy('position')
            ->get();


        return view('zoelife/colombia.eventos', [
            'slider' => $slider,
            'beneficios' => $beneficios,
            'formasTitle' => $formasTitle,
            'formasContenido' => $formasContenido,
            'star_videos' => $star_videos,
            'galeryEvents' => $galeryEvents,
            'tuExito' => $tuExito,
            'comunidad' => $comunidad
        ]);
    }

    public function estrellas()
    {
        $banner = CmsSection::where('component_id', 'colombia_banner_alcanzando_las_estrellas_51')
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

        return view('zoelife/colombia.alcanzando-las-estrellas', [
            'banner' => $banner,
            'presentacion' => $presentacion,
            'stars' => $stars,
            'star_videos' => $star_videos
        ]);
    }

    public function university()
    {
        $banner = CmsSection::where('component_id', 'colombia_banner_university_106')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->first();

        return view('zoelife/colombia.zoe-university', [
            'banner' => $banner
        ]);
    }

    public function contacto()
    {
        $banner = CmsSection::where('component_id', 'colombia_banner_contacto_52')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->first();

        $datosContacto = CmsSection::where('component_id', 'colombia_datos_contacto_110')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();

        return view('zoelife/colombia.contacto', [
            'banner' => $banner,
            'datosContacto' => $datosContacto
        ]);
    }
}
