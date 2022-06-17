<?php

namespace Modules\News\Http\Livewire;

use Livewire\Component;

class Title3 extends Component
{
    public $menu = false;
    public function render()
    {
        return view('news::livewire.title3');
    }

    public function menuSelection($menu){
        $this->menu = $menu;
    }
}
