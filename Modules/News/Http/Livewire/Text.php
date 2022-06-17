<?php

namespace Modules\News\Http\Livewire;

use Livewire\Component;

class Text extends Component
{
    public $menu = false;
    public function render()
    {
        return view('news::livewire.text');
    }

    public function menuSelection($menu){
        $this->menu = $menu;
    }
}

