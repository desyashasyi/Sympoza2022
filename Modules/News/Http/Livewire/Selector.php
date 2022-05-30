<?php

namespace Modules\News\Http\Livewire;

use Livewire\Component;

class Selector extends Component
{
    public $menu = false;
    public function render()
    {
        return view('news::livewire.selector');
    }

    public function menuSelection($menu){
        $this->menu = $menu;
    }
}
