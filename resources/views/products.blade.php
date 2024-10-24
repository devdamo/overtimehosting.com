@extends('layouts.wrapper')

@section('content')

    @include('layouts.navigation')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Products</h1>

        <form action="{{ url('/products') }}" method="GET" class="mb-4">
            <div class="flex space-x-4">
                <select name="cpu" class="border p-2 rounded">
                    <option value="">Select CPU</option>
                    <option value="AMD">AMD</option>
                    <option value="INTEL">Intel</option>
                    <option value="ARM">ARM</option>
                </select>
                <select name="seller" class="border p-2 rounded">
                    <option value="">Select Seller</option>
                    <option value="OvertimeHosting">OvertimeHosting</option>
                    <option value="Shadow Hosting">Shadow Hosting</option>
                </select>
                <input type="number" name="price_min" placeholder="Min Price" class="border p-2 rounded">
                <input type="number" name="price_max" placeholder="Max Price" class="border p-2 rounded">
                <button type="submit" class="bg-blue-500 text-white p-2 rounded">Filter</button>
            </div>
        </form>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($products as $product)
                <div class="border p-4 rounded-lg shadow">
                    <img src="{{ asset('storage/' . $product->images->first()->image_url) }}" alt="{{ $product->name }}" class="mb-4 w-full h-48 object-cover rounded">
                    <h2 class="text-xl font-bold mb-2">{{ $product->name }}</h2>
                    <p class="mb-2">{{ $product->product_description }}</p>
                    <p class="text-lg font-semibold mb-2">Price: ${{ $product->price }}</p>
                    @if ($product->student_price)
                        <p class="text-lg font-semibold text-green-500 mb-2">Student Price: ${{ $product->student_price }}</p>
                    @endif
                    <p class="mb-2">Seller: {{ $product->seller->name }}</p>
                    <p class="mb-2">CPU: {{ $product->filters->pluck('name')->join(', ') }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
