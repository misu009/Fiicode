<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    public array $navbarLinks;
    
    public function __construct(array $navbarLinks)
    {
        $this->navbarLinks = $navbarLinks;
    }

    public function render(): View|Closure|string
    {
        return view('components.navbar');
    }
}

    