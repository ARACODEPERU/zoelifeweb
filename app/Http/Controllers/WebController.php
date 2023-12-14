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






    public function boliviainicio()
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

        return view('zoelife/bolivia.index', [
            'slider' => $slider,
            'video' => $video,
            'pages' => $pages
        ]);
    }

    public function ecuadorinicio()
    {
        return view('zoelife/ecuador.index');
    }
}
