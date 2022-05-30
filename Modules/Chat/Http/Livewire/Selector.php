<?php

namespace Modules\Chat\Http\Livewire;

use Livewire\Component;

class Selector extends Component
{
    public $menu = false;
    public function render()
    {
        return view('chat::livewire.selector');
    }
     public function menuSelection($menu){
        $this->menu = $menu;
     }
}
