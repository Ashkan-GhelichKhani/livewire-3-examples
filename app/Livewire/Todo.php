<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;

class Todo extends Component
{
    public $task = '';
    public $tasks;

    public function mount(){
        $this->tasks = Task::all();
    }

    public function add()
    {
        Task::create(['title' => $this->task]);
        $this->tasks = Task::all();
        $this->reset(['task']);
    }

    public function toggle(Task $task)
    {
        $task->done == 0 ?  $task->update(['done' => 1]) :  $task->update(['done' => 0]);
    }

    public function delete(Task $task)
    {
        $task->delete();
        $this->tasks = Task::all();
    }
    #[layout('layouts.app')]
    public function render()
    {
        return view('livewire.todo');
    }
}
