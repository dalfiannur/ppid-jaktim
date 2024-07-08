<?php

namespace App\Livewire\HomePage;

use Livewire\Component;

class VideoSlider extends Component
{
    public $videos = [
        [
            "title" => "Video 1",
            "image" => "images/video-series/video-series-1.jpg",
        ],
        [
            "title" => "Video 2",
            "image" => "images/video-series/video-series-2.jpg",
        ],
        [
            "title" => "Video 3",
            "image" => "images/video-series/video-series-3.jpg",
        ],
        [
            "title" => "Video 4",
            "image" => "images/video-series/video-series-4.jpg",
        ],
        [
            "title" => "Video 5",
            "image" => "images/video-series/video-series-5.jpg",
        ],
        [
            "title" => "Video 6",
            "image" => "images/video-series/video-series-6.jpg",
        ],
    ];

    public function render()
    {
        return view('livewire.home-page.video-slider');
    }
}
