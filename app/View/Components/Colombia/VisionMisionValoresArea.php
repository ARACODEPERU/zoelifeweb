<?php

namespace App\View\Components\Colombia;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class VisionMisionValoresArea extends Component
{
    protected $nosotros;

    public function __construct()
    {
        $this->nosotros = CmsSection::with(['items' => function ($query) {
            $query->orderBy('cms_section_items.position', 'asc');
        }])
            ->where('component_id', 'peru_vision_mision_valores_area_3')
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.colombia.vision-mision-valores-area', [
            'nosotros' => $this->nosotros
        ]);
    }
}
