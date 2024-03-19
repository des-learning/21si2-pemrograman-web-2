<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Component;

class InputBarang extends Component
{
    public string $nama;
    public int $harga;

    public function add()
    {
        $this->dispatch('add-item-barang', nama: $this->nama, harga: $this->harga);
        // $this->reset();
    }

    public function render()
    {
        return view('livewire.input-barang');
    }
}
