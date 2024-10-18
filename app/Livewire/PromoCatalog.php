<?php

namespace App\Livewire;

use App\Models\Promo;
use Livewire\Component;
use Livewire\WithPagination;

class PromoCatalog extends Component
{

    use WithPagination;

    public $promos;
    public $loadCount = 3; // Jumlah produk yang dimuat setiap kali
    public $totalProducts; // Total produk
    public $loading = false;

    public function mount()
    {
        $this->promos = Promo::all()->take($this->loadCount);
        $this->totalProducts = Promo::all()->count(); // Hitung total produk
    }

    public function loadMore()
    {
        $this->loading = true; // Set loading menjadi true
        // Simulasi loading (Anda bisa menggunakan async request atau delay)
        sleep(1); // Simulasi delay 2 detik (Hapus atau ganti dengan logika yang sesuai di production)

        $this->loadCount += 3; // Tambah jumlah produk yang akan dimuat
        $this->promos = Promo::all()->take($this->loadCount);

        // $this->loading = false; // Set loading menjadi false
    }

    public function render()
    {
        return view('livewire.pages.promo');
    }
}
