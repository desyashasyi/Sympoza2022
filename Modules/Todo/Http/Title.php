<?php

namespace Modules\Todo\Http\Livewire;

use Livewire\Component;

class Title extends Component
{
    public $menu = false;
    public function render()
    {
        return view('Todo::livewire.title');
    }

    public function menuSelection($menu){
        $this->menu = $menu;
    }
}