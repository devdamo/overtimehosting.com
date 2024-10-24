<x-app-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Edit Product</h1>
        <form action="{{ route('dashboard.products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>
            <div class="mb-4">
                <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                <input type="number" name="price" id="price" value="{{ old('price', $product->price) }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>
            <div class="mb-4">
                <label for="student_price" class="block text-sm font-medium text-gray-700">Student Price</label>
                <input type="number" name="student_price" id="student_price" value="{{ old('student_price', $product->student_price) }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>
            <div class="mb-4">
                <label for="product_description" class="block text-sm font-medium text-gray-700">Product Description</label>
                <textarea name="product_description" id="product_description" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ old('product_description', $product->product_description) }}</textarea>
            </div>
            <div class="mb-4">
                <label for="longer_description" class="block text-sm font-medium text-gray-700">Longer Description</label>
                <textarea name="longer_description" id="longer_description" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ old('longer_description', $product->longer_description) }}</textarea>
            </div>
            <div class="mb-4">
                <label for="detailed_description" class="block text-sm font-medium text-gray-700">Detailed Description</label>
                <textarea name="detailed_description" id="detailed_description" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ old('detailed_description', $product->detailed_description) }}</textarea>
            </div>
            <div class="mb-4">
                <label for="seller_id" class="block text-sm font-medium text-gray-700">Seller</label>
                <select name="seller_id" id="seller_id" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    @foreach($sellers as $seller)
                        <option value="{{ $seller->id }}" {{ $seller->id == $product->seller_id ? 'selected' : '' }}>{{ $seller->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="bg-blue-500 text-white p-2 rounded">Update Product</button>
        </form>
    </div>
</x-app-layout>
