<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Label extends Component
{
  public $for;
  public $text;
  public $class;
    public function __construct($for, $text ='', $class ='')
    {
        $this->for = $for;
        $this->text = $text;
        $this->class = $class;
    }

    public function render()
    {
        return view('components.label');
    }
}
