<?php

namespace App\Livewire;

use Livewire\Component;

class AboutContentSection extends Component
{
    public $about;

    public function mount($about){
        $this->about = $about;
    }

    public function render()
    {
        return view('livewire.about-content-section');
    }
}
