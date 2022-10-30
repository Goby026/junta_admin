<?php

namespace App\View\Components;

use App\Models\Zona;
use Illuminate\View\Component;

class ZonaFormBody extends Component
{
    private $zona;
    /**
     * Create a new component instance.
     *@param \App\Models\Zona
     * @return void
     */
    public function __construct($zona = null)
    {
        if ( is_null($zona) ) {
            $zona = Zona::make([]);
        }
        $this->zona = $zona;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $params = [
            "zona" => $this->zona
        ];

        return view('components.zona-form-body', $params);
    }
}
