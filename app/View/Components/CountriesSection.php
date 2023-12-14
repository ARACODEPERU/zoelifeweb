<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Modules\CMS\Entities\CmsPage;

class CountriesSection extends Component
{
    protected $pages;

    public function __construct()
    {
        $this->pages = CmsPage::with('country')
            ->where('status', true)
            ->where('main', true)
            ->whereNotNull('country_id')
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.countries-section', [
            'pages' => $this->pages
        ]);
    }
}
