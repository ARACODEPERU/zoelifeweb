<?php

namespace App\View\Components\Ecuador;

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
            ->where('component_id', 'ecuador_footer_area_29')
            ->get();

        $this->testimonies = CmsTestimony::where('status', true)
            ->orderBy('id', 'DESC')
            ->limit(3)
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ecuador.footer-area', [
            'footer' => $this->footer,
            'testimonies'   => $this->testimonies
        ]);
    }
}
