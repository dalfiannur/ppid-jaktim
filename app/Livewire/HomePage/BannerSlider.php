<?php

namespace App\Livewire\HomePage;

use Livewire\Component;

class BannerSlider extends Component
{
    public $banners = [
        'hero-1.jpeg',
        'hero-1.jpeg',
        'hero-1.jpeg',
    ];

    public function render()
    {
        return view('livewire.home-page.banner-slider');
    }
}
