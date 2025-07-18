<div class="flex flex-col justify-start align-middle gap-2 max-w-6xl w-full">
    <div class="mb-3 flex justify-start align-middle gap-2 max-w-6xl w-full">
        <input type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-1/6 p-2.5" placeholder="Num1..." wire:model.blur="num1">
        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-1/12 p-2.5" wire:model.blur="operator">
            @foreach($operators as $item)
                <option value="{{$item}}">{{ $item }}</option>
            @endforeach
        </select>
        <input type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-1/6 p-2.5" placeholder="Num2..." wire:model.blur="num2">
        <button class="px-4 py-2 text-gray-100 font-bold rounded bg-blue-500 hover:bg-blue-600 hover:cursor-pointer" wire:click="calculate">=</button>
    </div>
    <p class="text-3xl">Result is: <span>{{ $result }}</span></p>
</div>
