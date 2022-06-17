<?php

namespace Modules\News\Http\Livewire;

use Livewire\Component;

class Create extends Component
{
    public $menu = false;
    public function render()
    {
        return view('news::livewire.create');
    }

    public function menuSelection($menu){
        $this->menu = $menu;
    }
}