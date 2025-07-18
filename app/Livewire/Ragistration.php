<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Ragistration extends Component
{
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    protected $rules = [
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
        'password_confirmation' => ['required', 'string', 'min:8'],
    ];

    public function submit()
    {
        $validatedData = $this->validate();
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        session()->flash('success', 'Your account has been created.');

        $this->reset();
    }
    public function render()
    {
        return view('livewire.ragistration', ['title' => 'Ragistration']);
    }

}
