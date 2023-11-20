<?php

namespace App\View\Components\Peru;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Modules\CMS\Entities\CmsSection;

class FooterArea extends Component
{
    protected $footer;

    public function __construct()
    {
        $this->footer = CmsSection::with(['items' => function ($query) {
            $query->orderBy('cms_section_items.position', 'asc');
        }])
            ->where('component_id', 'footer_peru_5')
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.peru.footer-area', [
            'footer' => $this->footer
        ]);
    }
}
