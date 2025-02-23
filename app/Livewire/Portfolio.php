<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Contracts\View\View;

class Portfolio extends Component
{
    public $originalPortfolioList;
    public $portfolioList;
    public function mount(): void
    {
        $this->originalPortfolioList = [
            [
                "title" => "Mahha dii Meru Resorts",
                "category" => "Web",
                "image" => "images/Mahha_Resorts.png",
                "url" => "https://mahharesorts.com",
            ],
            [
                "title" => "Pelita Mas",
                "category" => "Web",
                "image" => "images/Pelita_Mas.png",
                "url" => "https://jualgentengbeton.com/",
            ],
        ];

        $this->portfolioList = $this->originalPortfolioList;
    }

    public function setActivePortfolio($category): void
    {
        $this->portfolioList =
            $category !== "All"
                ? array_filter($this->originalPortfolioList, function (
                    $item
                ) use ($category) {
                    return $item["category"] === $category;
                })
                : $this->originalPortfolioList;
    }

    public function render(): View
    {
        return view("livewire.portfolio");
    }
}
