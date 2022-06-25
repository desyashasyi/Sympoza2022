<?php

namespace Modules\Todo\Http\Livewire;

use Livewire\Component;

class Text extends Component
{
    public $menu = false;
    public function render()
    {
        return view('Todo::livewire.text');
    }

    public function menuSelection($menu){
        $this->menu = $menu;
    }
}