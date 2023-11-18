<?php

namespace App\View\Components\Peru;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class VisionMisionValoresArea extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.peru.vision-mision-valores-area');
    }
}