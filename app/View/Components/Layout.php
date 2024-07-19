<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Layout extends Component
{
    /**
     * Create a new component instance.
     */
    public $data;
    public function __construct($data)
    {
        $this->data=$data;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        // echo json_encode($this->data); die;
        return view('components.layout', $this->data);
    }
}
