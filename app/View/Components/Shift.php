<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Shift extends Component
{
    public $shift;
    public $period = array(1 => "De 08 h à 14 h", 2 => "De 14 h à 21 h", 3 => "De 21 h à 08 h");

    public function __construct($shift)
    {
        $this->shift = $shift;
    }

    public function render()
    {
        return view('components.shift');
    }
}
