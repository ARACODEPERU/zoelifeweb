<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

use Modules\CMS\Entities\CmsSectionItem;

class PeruOportunidadSlider extends Component
{
    /**
     * Create a new component instance.
     */
    public $sliders;
    public function __construct()
    {
        $this->sliders = CmsSectionItem::with('item.items')->where('section_id', 121)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        // return view('components.peru-oportunidad-slider');
        return view('components.peru-oportunidad-slider', [
            'sliders' => $this->sliders
        ]);
    }
}
