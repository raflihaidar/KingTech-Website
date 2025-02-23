<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Contracts\View\View;

class Service extends Component
{
    public $serviceList = [];
    public $activeService;
    public $activeServiceIndex = null; // Tambahkan variabel ini

    // Method untuk inialisasi data serviceList saat halaman pertama kali dimuat
    public function mount(): void
    {
        $this->serviceList = [
            [
                "title" => "Web Development",
                "description" =>
                    "Optimalkan Potensi Bisnis Anda dengan Strategi IT yang Tepat Sasaran. Kami membantu Anda merancang dan mengimplementasikan strategi teknologi informasi yang selaras dengan tujuan bisnis Anda, memastikan pertumbuhan yang berkelanjutan di era digital. Dengan pendekatan yang disesuaikan dan inovatif, kami menjadikan teknologi sebagai kekuatan pendorong untuk kesuksesan Anda.",
                "image" => "images/web-dev.jpg",
            ],
            [
                "title" => "Mobile Apps",
                "description" =>
                    "Pengembangan aplikasi mobile yang responsif dan user-friendly sangat penting dalam era digital saat ini. Kami menciptakan aplikasi yang dirancang khusus untuk memenuhi kebutuhan bisnis Anda, baik di platform Android maupun iOS, dengan antarmuka yang menarik dan pengalaman pengguna yang optimal. Aplikasi mobile kami memastikan keterlibatan pengguna dan meningkatkan efisiensi operasional Anda.",
                "image" => "images/mobile.jpg",
            ],
            [
                "title" => "Artificial Intelligence",
                "description" =>
                    "Solusi Artificial Intelligence (AI) kami membantu bisnis Anda untuk meningkatkan efisiensi operasional dan mendukung pengambilan keputusan berbasis data. Kami menawarkan layanan seperti analisis prediktif, otomatisasi proses bisnis, chatbot, dan machine learning, sehingga bisnis Anda dapat tetap kompetitif di tengah persaingan pasar yang ketat.",
                "image" => "images/ai.jpg",
            ],
            [
                "title" => "Internet of Things",
                "description" =>
                    "IoT memungkinkan otomatisasi dan pengelolaan aset secara real-time. Kami menawarkan solusi IoT yang terintegrasi untuk berbagai sektor, seperti manufaktur, transportasi, dan kesehatan. Dengan teknologi IoT, Anda dapat memantau dan mengontrol perangkat dari jarak jauh, serta mendapatkan wawasan yang lebih mendalam melalui data yang dikumpulkan secara otomatis.",
                "image" => "images/iot.jpg",
            ],
            [
                "title" => "Infrastruktur Jaringan",
                "description" =>
                    "Kami menyediakan layanan desain, implementasi, dan pemeliharaan infrastruktur jaringan yang handal dan aman. Infrastruktur jaringan yang kuat sangat penting untuk memastikan kelancaran operasi bisnis Anda. Tim kami berpengalaman dalam membangun jaringan yang efisien dengan uptime tinggi, memastikan komunikasi dan transfer data berjalan tanpa hambatan.",
                "image" => "images/network.jpg",
            ],
        ];

        // inialisasi nilai default
        $this->activeService = $this->serviceList[0];
        $this->activeServiceIndex = 0;
    }

    public function setActiveService($index)
    {
        $this->activeServiceIndex = $index;
        $this->activeService = $this->serviceList[$index];
    }

    public function render(): View
    {
        return view("livewire.service");
    }
}
