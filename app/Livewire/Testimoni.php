<?php

namespace App\Livewire;

use Livewire\Component;

class Testimoni extends Component
{
    public $testimonials = [];
    public $currentIndex = 0;

    public function mount()
    {
        $this->testimonials = [
            [
                "name" => "Jhon Doe",
                "company" => "Mahha dii Meru Resort",
                "text" =>
                    "Keputusan untuk bekerja dengan KingTech adalah salah satu langkah terbaik yang kami ambil. Tim mereka tidak hanya memahami kebutuhan kami tetapi juga memberikan solusi inovatif yang meningkatkan efisiensi operasional kami secara signifikan. Dukungan purna jual mereka juga luar biasa.",
                "img" => "images/client.png",
            ],
            [
                "name" => "Jane Smith",
                "company" => "Pelita Mas",
                "text" =>
                    "KingTech memberikan layanan yang luar biasa dan inovatif. Kami sangat puas dengan hasilnya dan tidak sabar untuk terus bekerja sama di masa depan.",
                "img" => "images/client.png",
            ],
        ];
    }

    public function render()
    {
        return view("livewire.testimoni");
    }
}
