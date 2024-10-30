<?php
// app/View/Components/Callout.php
namespace App\View\Components;

use Illuminate\View\Component;

class CustomCallout extends Component
{
    public $title;
    public $theme;

    public function __construct($title, $theme = 'info')
    {
        $this->title = $title;
        $this->theme = $theme;
    }

    public function render()
    {
        return view('components.custom-callout');
    }
}