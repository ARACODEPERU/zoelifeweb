<?php

namespace App\View\Components\Bolivia;

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
            ->where('component_id', 'bolivia_footer_area_16')
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
        return view('components.bolivia.footer-area', [
            'footer' => $this->footer,
            'testimonies'   => $this->testimonies
        ]);
    }
}
