<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CustomCheckbox extends Component
{
 
    public $name;
    public $label;
    public $checked;



    public function __construct($name, $label='', $checked = false)
    {
        $this->name = $name;
        $this->label = $label;
        $this->checked = $checked;
    }

    public function render()
    {
        return view('components.custom-checkbox');
    }
}
