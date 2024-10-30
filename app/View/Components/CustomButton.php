<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Psy\Output\Theme;

class CustomButton extends Component
{
  public $name;
  public $label;
  public $theme;
  public $icon;
  public $class;
  
    public function __construct($name='', $label='', $theme='',$icon='', $class='')
    {
        $this->name= $name;
        $this->label = $label;
        $this->theme = $theme;
        $this->icon = $icon;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.custom-button');
    }
}
