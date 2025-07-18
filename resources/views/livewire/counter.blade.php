<div class="flex justify-start align-middle items-center gap-2 max-w-6xl w-full">
    <button class="px-4 py-2 text-gray-100 text-xl font-bold rounded bg-red-600 hover:bg-red-700 hover:cursor-pointer" wire:click="decrement">-</button>
    <p class="font-bold">Number is: <span class="px-3 py-2 rounded bg-gray-900 text-gray-100 ms-2">{{ $counter }}</span></p>
    <button class="px-4 py-2 text-gray-100 text-xl font-bold rounded bg-blue-600 hover:bg-blue-700 hover:cursor-pointer" wire:click=increment>+</button>
</div>
