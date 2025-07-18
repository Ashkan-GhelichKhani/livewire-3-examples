<?php

namespace App\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public ?int $num1;
    public ?int $num2;

    public string $operator = '';
    public array $operators = ['+', '-', '*', '/', '%'];
    public ?float $result;
    public ?string $error = null;

    public function calculate()
    {
        switch ($this->operator) {
            case '+':
                $this->result = $this->num1 + $this->num2;
                break;
            case '-':
                $this->result = $this->num1 - $this->num2;
                break;
            case '*':
                $this->result = $this->num1 * $this->num2;
                break;
            case '/':
                $this->result = $this->num1 / $this->num2;
                break;
            case '%':
                $this->result = $this->num1 % $this->num2;
                break;
            default:
                $this->result = null;
                $this->error = 'Unknown operator';
        }
    }

    #[layout('layouts.app')]
    public function render()
    {
        return view('livewire.calculator');
    }
}
