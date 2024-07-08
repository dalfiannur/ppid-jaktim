<?php

namespace App\Livewire\HomePage;

use Livewire\Component;

class NewsCard extends Component
{
    public $class = "";
    
    public function render()
    {
        return view('livewire.home-page.news-card');
    }
}
