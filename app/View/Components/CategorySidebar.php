<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CategorySidebar extends Component
{
    protected $categories;
    protected $store;
    protected $activeCategorySlugs;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($categories, $store, $activeCategorySlugs)
    {
        $this->categories = $categories;
        $this->store = $store;
        $this->activeCategorySlugs = $activeCategorySlugs;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.category-sidebar', [
            'categories' => $this->categories,
            'store' => $this->store,
            'activeCategorySlugs' => $this->activeCategorySlugs,
            ]);
    }
}
