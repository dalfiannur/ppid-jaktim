<?php

namespace App\Livewire\HomePage;

use Livewire\Component;

class RecentNews extends Component
{
    public $recentNews = [
        [
            [
                'title' => 'Title 1',
                'description' => 'Description 1',
                'image' => 'image 1',
                'date' => '2024-01-01',
            ],
            [
                'title' => 'Title 2',
                'description' => 'Description 2',
                'image' => 'image 2',
                'date' => '2024-01-02',
            ],
            [
                'title' => 'Title 3',
                'description' => 'Description 3',
                'image' => 'image 3',
                'date' => '2024-01-03',
            ],
            [
                'title' => 'Title 4',
                'description' => 'Description 4',
                'image' => 'image 4',
                'date' => '2024-01-04',
            ],
        ],
        [
            [
                'title' => 'Title 5',
                'description' => 'Description 5',
                'image' => 'image 5',
                'date' => '2024-01-05',
            ],
        ]
    ];

    public function render()
    {
        return view('livewire.home-page.recent-news');
    }
}
