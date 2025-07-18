<div class="flex flex-col justify-start align-middle gap-2 max-w-6xl w-full">
    <h2 class="p-2 mb-3 border-b-2 text-3xl font-bold">Register</h2>
    @if (session()->has('success'))
        <div class="bg-emerald-500 text-white py-3 px-4 mb-4 rounded">
            {{ session('success') }}
        </div>
    @endif
    <form wire:submit.prevent="submit">
        <div class="mb-3 flex flex-col">
            <label for="name">Name</label>
            <input type="text" id="name" class="border border-gray-300 bg-gray-100 rounded p-1 @error('name') border-red-500 @enderror" wire:model="name" autofocus>
            <span class="text-sm text-red-600">@error('name') {{$message}} @enderror</span>
        </div>
        <div class="mb-3 flex flex-col">
            <label for="email">Email</label>
            <input type="email" id="email" class="border border-gray-300 bg-gray-100 rounded p-1 @error('email') border-red-500 @enderror" wire:model="email">
            <span class="text-sm text-red-600">@error('email') {{$message}} @enderror</span>
        </div>
        <div class="mb-3 flex flex-col">
            <label for="password">Password</label>
            <input type="password" id="password" class="border border-gray-300 bg-gray-100 rounded p-1 @error('password') border-red-500 @enderror" wire:model="password">
            <span class="text-sm text-red-600">@error('password') {{$message}} @enderror</span>
        </div>
        <div class="mb-3 flex flex-col">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" id="password_confirmation" class="border border-gray-300 bg-gray-100 rounded p-1 @error('password_confirmation') border-red-500 @enderror" wire:model="password_confirmation">
            <span class="text-sm text-red-600">@error('password_confirmation') {{$message}} @enderror</span>
        </div>
        <button type="submit" class="px-4 py-2 rounded text-gray-100 font-semibold bg-blue-500 hover:bg-blue-600 hover:cursor-pointer">Register</button>
    </form>

</div>
