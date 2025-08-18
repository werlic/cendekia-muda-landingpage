<?php

namespace App\View\Components\Learning;

use Illuminate\View\Component;

class Header extends Component
{
    public $user;
    public $showSearch;

    public function __construct($user = null, $showSearch = false)
    {
        $this->user = $user;
        $this->showSearch = $showSearch;
    }

    public function render()
    {
        return view('learning.components.header');
    }
}
