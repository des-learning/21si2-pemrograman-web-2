<?php

namespace App\Livewire;

use Livewire\Component;

class CreateBarangForm extends Component
{
    public string $invoice;
    public array $items;

    public function render()
    {
        return view('livewire.create-barang-form');
    }
}
