<?php

namespace App\Livewire\HomePage;

use Livewire\Component;

class ExploreInformation extends Component
{
    public $informationList = [];

    public function mount()
    {
        $this->informationList = [
            [
                'title' => 'Hukum',
                'value' => 8,
                'icon' => asset('icons/hukum.png'),
            ],
            [
                'title' => 'Kepegawaian, Ketatalaksanaan Dan Pelayanan Publik',
                'value' => 8,
                'icon' => asset('icons/kkp.png'),
            ],
            [
                'title' => 'Program, Pelaporan Dan Keuangan',
                'value' => 8,
                'icon' => asset('icons/ppk.png'),
            ],
            [
                'title' => 'Perekonomian',
                'value' => 8,
                'icon' => asset('icons/perekonomian.png'),
            ],
            [
                'title' => 'Pembangunan dan Lingkungan Hidup',
                'value' => 8,
                'icon' => asset('icons/plh.png'),
            ],
            [
                'title' => 'Kesejahteraan Rakyat',
                'value' => 8,
                'icon' => asset('icons/kesejahteraan-rakyat.png'),
            ],
            [
                'title' => 'Umum',
                'value' => 8,
                'icon' => asset('icons/umum.png'),
            ],
        ];
    }

    public function render()
    {
        return view('livewire.home-page.explore-information');
    }
}
