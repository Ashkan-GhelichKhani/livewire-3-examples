<header class="bg-gray-900 flex justify-center items-center p-4 text-gray-100 overflow-x-scroll md:overflow-x-hidden">
    <nav class="flex justify-between items-center w-full max-w-6xl">
        <h1 class="text-2xl font-bold text-nowrap me-5">Livewire 3 Examples</h1>
        <nav class="flex gap-4">
            <a class="text-gray-100 hover:text-blue-500 font-bold {{ request()->routeIs('home') ? 'text-yellow-600 border-b-2' : '' }}" href="{{ route('home') }}">Home</a>
            <a class="text-gray-100 hover:text-blue-500 font-bold {{ request()->routeIs('counter') ? 'text-yellow-600 border-b-2' : '' }}" href="{{ route('counter') }}">Counter</a>
            <a class="text-gray-100 hover:text-blue-500 font-bold {{ request()->routeIs('calculator') ? 'text-yellow-600 border-b-2' : '' }}" href="{{ route('calculator') }}">Calculator</a>
            <a class="text-gray-100 hover:text-blue-500 font-bold {{ request()->routeIs('todo') ? 'text-yellow-600 border-b-2' : '' }}" href="{{ route('todo') }}">Todo</a>
            <a class="text-gray-100 hover:text-blue-500 font-bold {{ request()->routeIs('regions') ? 'text-yellow-600 border-b-2' : '' }}" href="{{ route('regions') }}">Regions</a>
            <a class="text-gray-100 hover:text-blue-500 font-bold {{ request()->routeIs('products') ? 'text-yellow-600 border-b-2' : '' }}" href="{{ route('products') }}">Products</a>
            <a class="text-gray-100 hover:text-blue-500 font-bold {{ request()->routeIs('registration') ? 'text-yellow-600 border-b-2' : '' }}" href="{{ route('registration') }}">Registration</a>
        </nav>
    </nav>
</header>
