<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NewsCardComponent extends Component
{
    /**
     * Create a new component instance.
     */
        public $title;
        public $content;
        public $src;
        public $link;
    public function __construct($title,$content,$src,$link)
    {
       $this->title = $title;
       $this->content = $content;
       $this->src = $src;
       $this->link =  $link;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.news-card-component');
    }
}
