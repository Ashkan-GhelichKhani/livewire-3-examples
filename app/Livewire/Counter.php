<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public int $counter = 0;
    public string $title = 'Counter';

    public function increment()
    {
        $this->counter++;
    }

    public function decrement()
    {
        $this->counter--;
    }
    #[layout('layouts.app')]
    public function render()
    {
        return view('livewire.counter');
    }
}
