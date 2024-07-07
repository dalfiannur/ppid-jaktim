<?php

namespace App\Livewire\HomePage;

use Livewire\Component;

class ExploreInformationCard extends Component
{
    public $title;
    public $value;
    public $icon;
    
    public function render()
    {
        return view('livewire.home-page.explore-information-card');
    }
}
