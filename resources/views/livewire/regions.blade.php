<div class="flex flex-col justify-start align-middle gap-2 max-w-6xl w-full">
    <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-1/3 p-2.5" wire:model="selectedContinent" wire:change="setCountries">
        <option value="0">Select a Continent...</option>
        @foreach($continents as $item)
            <option value="{{$item->id}}">{{ $item->name }}</option>
        @endforeach
    </select>
    <p wire:loading>Loading...</p>
    <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-1/3 p-2.5">
        @foreach($countries as $item)
            <option value="{{$item->id}}">{{ $item->name }}</option>
        @endforeach
    </select>
</div>
