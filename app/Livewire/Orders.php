<?php

namespace App\Livewire;

use App\Models\OrdersLines;
use Livewire\Component;

class Orders extends Component
{
    public function render()
    {    
        return view('livewire.orders', ['orders' => OrdersLines::calcularCosteTotal()]);
    }
}
