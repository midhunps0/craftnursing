<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public $cardtitle;
    public $cardcontent;

    public function __construct($cardtitle,$cardcontent)
    {
      $this->cardtitle = $cardtitle;
      $this->cardcontent = $cardcontent; 
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-component');
    }
}
