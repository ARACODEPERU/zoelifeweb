<?php

namespace App\View\Components\Peru;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Modules\CMS\Entities\CmsSection;

class VisionMisionValoresArea extends Component
{
    protected $nosotros;

    public function __construct()
    {
        // $this->nosotros = CmsSection::with('items.item.items')
        //     ->where('component_id', 'nosotros_peru_3')
        //     ->get();
        $this->nosotros = CmsSection::with(['items' => function ($query) {
            $query->orderBy('cms_section_items.position', 'asc');
        }])
            ->where('component_id', 'nosotros_peru_3')
            ->get();

        //dd($this->nosotros);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.peru.vision-mision-valores-area', [
            'nosotros' => $this->nosotros
        ]);
    }
}
