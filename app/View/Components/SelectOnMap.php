<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SelectOnMap extends Component
{
    public $changablePoint;

    /**
     * Create a new component instance.
     */
    public function __construct($longitude, $latitude)
    {
        $this->changablePoint = ['longitude' => $longitude , 'latitude' => $latitude];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.select-on-map');
    }
}
