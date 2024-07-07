<?php

namespace App\Livewire\HomePage;

use Livewire\Component;

class Hero extends Component
{
    public $heroImages = [
        'hero-1.jpeg',
        'hero-1.jpeg',
        'hero-1.jpeg',
    ];
    
    public function render()
    {
        return view('livewire.home-page.hero');
    }
}
