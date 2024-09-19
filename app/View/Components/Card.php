<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public string $title;
    public string $footer;
    public bool $showFooter;

    public function __construct(string $title = 'Default Title', string $footer = '', bool $showFooter = true)
    {
        $this->title = $title;
        $this->footer = $footer;
        $this->showFooter = $showFooter;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
