<?php

namespace Modules\Todo\Http\Livewire;

use Livewire\Component;

class Selector extends Component
{
    public $menu = false;
    public function render()
    {
        return view('Todo::livewire.selector');
    }

    
    public function menuSelection($menu){
        $this->menu = $menu;
    }
}