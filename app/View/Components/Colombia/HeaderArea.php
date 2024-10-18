<?php

namespace App\View\Components\Colombia;

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
    protected $productsct1;
    protected $productsct2;
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

        $this->productsct1 = OnliItem::join('products', 'products.id', 'item_id')
            ->join('product_categories', function ($query) {
                $query->on('product_categories.product_id', 'products.id')
                    ->where('category_id', 1);
            })
            ->select('onli_items.*')
            ->where('country_id', 4)
            ->get();

        $this->productsct2 = OnliItem::join('products', 'products.id', 'item_id')
            ->join('product_categories', function ($query) {
                $query->on('product_categories.product_id', 'products.id')
                    ->where('category_id', 2);
            })
            ->select('onli_items.*')
            ->where('country_id', 4)
            ->get();

        $this->pages = CmsPage::with('country')
            ->where('status', true)
            ->where('main', true)
            ->whereNotNull('country_id')
            ->get();
        $this->country = $this->pages->where('route', 'web_colombia_inicio')->values(); //cambiar pais segun convenga  debe ir values o entrega la posicion del array y no reordena la posicion
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.colombia.header-area', [
            'header' => $this->header,
            'products' => $this->products,
            'pages' => $this->pages,
            'country' => $this->country,
            'productsct1' => $this->productsct1,
            'productsct2' => $this->productsct2,
        ]);
    }
}
