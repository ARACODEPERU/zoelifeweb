<?php

namespace App\View\Components\Colombia;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Modules\CMS\Entities\CmsSection;
use Modules\Onlineshop\Entities\OnliItem;

class HeaderArea extends Component
{
    protected $header;
    protected $products;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->header = CmsSection::where('component_id', 'colombia_header_area_40')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )

            ->orderBy('cms_section_items.position')
            ->get();
        $this->products  = OnliItem::where('country_id', 4)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.colombia.header-area', [
            'header' => $this->header,
            'products' => $this->products
        ]);
    }
}
