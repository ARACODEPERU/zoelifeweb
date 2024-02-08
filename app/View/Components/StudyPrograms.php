<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Modules\CMS\Entities\CmsSection;

class StudyPrograms extends Component
{
    protected $programs;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->programs = CmsSection::where('component_id', 'programas_de_estudio_86')
            ->with('items.item.items')
            ->first();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        //dd($this->programs);
        return view('components.study-programs', [
            'programs' => $this->programs
        ]);
    }
}
