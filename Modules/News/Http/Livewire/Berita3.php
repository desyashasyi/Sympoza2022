<?php

namespace Modules\News\Http\Livewire;

use Livewire\Component;

class Berita3 extends Component
{
    public $menu = false;
    public function render()
    {
        return view('news::livewire.berita3');
    }

    public function menuSelection($menu){
        $this->menu = $menu;
    }
}
