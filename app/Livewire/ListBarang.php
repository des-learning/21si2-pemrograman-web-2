<?php

namespace App\Livewire;

use App\Models\Barang;
use Livewire\Attributes\On;
use Livewire\Component;

class ListBarang extends Component
{
    public array $items;

    #[On('add-item-barang')]
    public function addItem(string $nama, int $harga)
    {
        $this->items[] = ['nama' => $nama, 'harga' => $harga];
    }

    public function save()
    {
        foreach($this->items as $item) {
            Barang::create($item);
        }

        $this->items = [];
    }

    public function render()
    {
        return view('livewire.list-barang');
    }
}
