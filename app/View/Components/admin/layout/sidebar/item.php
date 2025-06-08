<?php

namespace App\View\Components\admin\layout\sidebar;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class item extends Component
{
    /**
     * Create a new component instance.
     */
    public $name;
    public $href;
    public $icon;
    public function __construct($name,$href,$icon)
    {
        $this->name = $name;
        $this->href = $href;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.layout.sidebar.item');
    }
}
