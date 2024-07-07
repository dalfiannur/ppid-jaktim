<?php

namespace App\Livewire\Partials;

use Livewire\Component;

class TopBar extends Component
{
    public $menuLinks = [
        [
            'label' => 'Beranda',
            'link' => '#',
            'active' => true
        ],
        [
            'label' => 'Profil',
            'link' => '#',
            'active' => false
        ],
        [
            'label' => 'Informasi Publik',
            'link' => '#',
            'active' => false
        ],
        [
            'label' => 'Standar Layanan',
            'link' => '#',
            'active' => false
        ],
        [
            'label' => 'Laporan',
            'link' => '#',
            'active' => false
        ],
        [
            'label' => 'Galeri',
            'link' => '#',
            'active' => false
        ],
        [
            'label' => 'Kontak',
            'link' => '#',
            'active' => false
        ]
    ];

    public function render()
    {
        return view('livewire.partials.top-bar');
    }
}
