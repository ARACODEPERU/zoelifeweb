<?php

namespace App\View\Components\Ecuador;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Modules\CMS\Entities\CmsSection;
use Modules\Onlineshop\Entities\OnliItem;
use Modules\CMS\Entities\CmsPage;

class HeaderArea extends Component
{
    protected $header;
    protected $products;
    protected $pages; //de aqui se saca los paises o countries
    protected $country;

    public function __construct()
    {
        $this->header = CmsSection::where('component_id', 'ecuador_header_area_27')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )

            ->orderBy('cms_section_items.position')
            ->get();
        //dd($this->products);
        $this->products  = OnliItem::where('country_id', 3)->get();

        $this->pages = CmsPage::with('country')
            ->where('status', true)
            ->where('main', true)
            ->whereNotNull('country_id')
            ->get();
        $this->country = $this->pages->where('route', 'web_ecuador_inicio')->values(); //cambiar pais segun convenga  debe ir values o entrega la posicion del array y no reordena la posicion
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ecuador.header-area', [
            'header' => $this->header,
            'products' => $this->products,
            'pages' => $this->pages,
            'country' => $this->country,
        ]);
    }
}
