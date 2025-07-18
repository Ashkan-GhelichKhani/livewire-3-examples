<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class Products extends Component
{
    public $search = '';



    public function render()
    {

        $query = Product::query();

        if ($this->search) {
            $query->where('name', 'like', "%{$this->search}%")
            ->orWhere('description', 'like', "%{$this->search}%");
        }


        return view('livewire.products', ['products' => $query->paginate(5)]);
    }
}
