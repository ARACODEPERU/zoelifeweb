<?php

namespace App\View\Components\Mexico;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Modules\CMS\Entities\CmsSection;

class VisionMisionValoresArea extends Component
{
    protected $nosotros;
    /**
     * Create a new component instance.
     */
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
        return view('components.mexico.vision-mision-valores-area', [
            'nosotros' => $this->nosotros
        ]);
    }
}
