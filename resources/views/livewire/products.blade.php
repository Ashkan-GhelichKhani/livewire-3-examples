<div class="flex flex-col justify-start align-middle gap-2 max-w-6xl w-full">
    <div class="mb-3 flex justify-start align-middle gap-2 max-w-6xl w-full">
        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-1/2 p-2.5" placeholder="Search for..." wire:model.lazy="search" autofocus>
    </div>
    <div>
        <h2 class="text-3xl border-b-2 p-1 mb-3">Products</h2>
        <table class="w-full">
            <thead class="border-b">
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr class="text-center">
                        <td>{{ $product->id }}</td>
                        <td>
                            <img src="{{ $product->image }}" class="w-[60px] mx-auto my-2 p-1 border rounded border-gray-300">
                        </td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $products->links() }}

    </div>

</div>
