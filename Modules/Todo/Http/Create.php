<?php

namespace Modules\Todo\Http\Livewire;

use Livewire\Component;

class Create extends Component
{
    public $menu = false;
    public function render()
    {
        return view('Todo::livewire.create');
    }

    public function menuSelection($menu){
        $this->menu = $menu;
    }
}