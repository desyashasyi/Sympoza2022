<?php

namespace Modules\News\Http\Livewire;

use Livewire\Component;

class Scriptdua extends Component
{
    public $menu = false;
    public function render()
    {
        return view('news::livewire.scriptdua');
    }

    public function menuSelection($menu){
        $this->menu = $menu;
    }
}

