<?php

namespace Modules\News\Http\Livewire;

use Livewire\Component;

class Script extends Component
{
    public $menu = false;
    public function render()
    {
        return view('news::livewire.script');
    }
    
    public function menuSelection($menu){
        $this->menu = $menu;
    }
}
