<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CodeBlock extends Component
{

    public $slot;
    public $class;
    public $id;
    public $name;
 
    public function __construct($slot='', $class='', $id='',$name='')
    {
        $this->slot = $slot;
        $this->class = $class;
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.code-block');
    }
}
