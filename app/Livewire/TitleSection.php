<?php

namespace App\Livewire;

use Livewire\Component;

class TitleSection extends Component
{
    public $title;

    public function mount($title)
    {
        $this->$title = $title;
    }

    public function render()
    {
        return view("livewire.title-section");
    }
}
