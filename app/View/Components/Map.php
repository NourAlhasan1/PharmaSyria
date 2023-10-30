<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Pharmacy;
class Map extends Component
{
    public $myLocationMarket;
    public $changablePoint;
    public $centerPoint;
    public $markers = [];
   // public $pharmacy=0;
  
    
    /**
     * Create a new component instance.
     */
    public function __construct($myLocationMarket = false, $markers = [], $changablePoint = null )
    {
        $this->myLocationMarket = $myLocationMarket;
        $this->changablePoint = $changablePoint;
        $this->centerPoint = $changablePoint ?? (count($markers) ? $markers[0] : [36,37]);
        $this->markers = $markers;
     
 
   
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.map');
    }
}
