<?php

namespace App\View\Components\Learning;

use Illuminate\View\Component;

class Sidebar extends Component
{
    public $active;

    public function __construct($active = null)
    {
        $this->active = $active;
    }

    public function render()
    {
        return view('learning.components.sidebar');
    }
}
