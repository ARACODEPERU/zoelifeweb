<?php

namespace App\View\Components\Colombia;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Modules\CMS\Entities\CmsSection;
use Modules\CMS\Entities\CmsTestimony;

class FooterArea extends Component
{
    protected $footer;
    protected $testimonies;

    public function __construct()
    {
        $this->footer = CmsSection::with(['items' => function ($query) {
            $query->orderBy('cms_section_items.position', 'asc');
        }])
            ->where('component_id', 'colombia_footer_area_42')
            ->get();
        $this->testimonies = CmsTestimony::where('status', true)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.colombia.footer-area', [
            'footer' => $this->footer,
            'testimonies'   => $this->testimonies
        ]);
    }
}