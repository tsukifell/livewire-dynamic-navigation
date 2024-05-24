<?php

namespace App\Livewire;

use Livewire\Component;

class HomeContentSection extends Component
{
    public $home;

    public function mount($home){
        $this->home = $home;
    }

    public function render()
    {
        return view('livewire.home-content-section');
    }
}
