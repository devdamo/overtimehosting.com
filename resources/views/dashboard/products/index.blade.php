<x-app-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Products</h1>
        <a href="{{ route('dashboard.products.create') }}" class="bg-blue-500 text-white p-2 rounded">Create Product</a>
        <table class="min-w-full bg-white border border-gray-300 mt-4">
            <thead>
            <tr>
                <th class="py-2 px-4 border-b">Name</th>
                <th class="py-2 px-4 border-b">Price</th>
                <th class="py-2 px-4 border-b">Student Price</th>
                <th class="py-2 px-4 border-b">Seller</th>
                <th class="py-2 px-4 border-b">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($products as $product)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $product->name }}</td>
                    <td class="py-2 px-4 border-b">${{ $product->price }}</td>
                    <td class="py-2 px-4 border-b">${{ $product->student_price }}</td>
                    <td class="py-2 px-4 border-b">{{ $product->seller->name }}</td>
                    <td class="py-2 px-4 border-b">
                        <a href="{{ route('dashboard.products.edit', $product->id) }}" class="text-blue-500">Edit</a>
                        <form action="{{ route('dashboard.products.destroy', $product->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
