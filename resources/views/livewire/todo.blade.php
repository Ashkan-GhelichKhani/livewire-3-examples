<div class="flex flex-col justify-start align-middle gap-2 max-w-6xl w-full">
    <div class="mb-3 flex justify-start align-middle gap-2 max-w-6xl w-full">
        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-1/2 p-2.5" placeholder="I want to do..." wire:model.blur="task" wire:keydown.enter="add">
        <button class="px-4 py-2 text-gray-100 font-bold rounded bg-blue-500 hover:bg-blue-600 hover:cursor-pointer" wire:click="add">Add</button>
    </div>
    <div>
        <h2 class="text-3xl border-b-2 mb-3">Tasks</h2>
        <ul class="w-1/2">
            @foreach($tasks as $item)
                <li class="flex justify-between items-center mb-3">
                    <div wire:key="{{ $item->id }}">
                        <input type="checkbox" class="me-2" wire:change="toggle({{ $item }})" id="{{ str_replace(' ', '-', $item->title ) }}" {{ $item->done ? 'checked' : '' }} >
                        <label for="{{ str_replace(' ', '-', $item->title ) }}">{{$item->title}}</label>
                    </div>
                    <div>
                        <button class="px-2 py-1 text-gray-100 rounded bg-red-500 hover:bg-red-600 hover:cursor-pointer" wire:click="delete({{ $item }})">Delete</button>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

</div>
