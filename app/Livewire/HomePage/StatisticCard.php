<?php

namespace App\Livewire\HomePage;

use Livewire\Component;

class StatisticCard extends Component
{
    public $title;
    public $value;
    public $icon;

    public function render()
    {
        return view('livewire.home-page.statistic-card');
    }
}
