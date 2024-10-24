<x-app-layout>
    <div class="container">
        <h1>Edit Product</h1>

        <!-- Display Validation Errors -->
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Product Edit Form -->
        <form action="{{ route('dashboard.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Use PUT or PATCH for updating -->

            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $product->name) }}">
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" name="price" id="price" step="0.01" class="form-control" value="{{ old('price', $product->price) }}">
            </div>

            <div class="form-group">
                <label for="logo">Product Logo</label>
                <input type="file" name="logo" id="logo" class="form-control">
                @if($product->logo)
                    <img src="{{ asset('storage/' . $product->logo) }}" alt="Product Logo" width="100">
                @endif
            </div>

            <div class="form-group">
                <label for="bg_logo">Background Logo</label>
                <input type="file" name="bg_logo" id="bg_logo" class="form-control">
                @if($product->bg_logo)
                    <img src="{{ asset('storage/' . $product->bg_logo) }}" alt="Background Logo" width="100">
                @endif
            </div>

            <div class="form-group">
                <label for="product_description">Product Description</label>
                <textarea name="product_description" id="product_description" class="form-control">{{ old('product_description', $product->product_description) }}</textarea>
            </div>

            <div class="form-group">
                <label for="features">Features (Optional)</label>
                <textarea name="features" id="features" class="form-control">{{ old('features', $product->features) }}</textarea>
            </div>

            <div class="form-group">
                <label for="important_info">Important Info (Optional)</label>
                <textarea name="important_info" id="important_info" class="form-control">{{ old('important_info', $product->important_info) }}</textarea>
            </div>

            <div class="form-group">
                <label for="long_description">Long Description</label>
                <textarea name="long_description" id="long_description" class="form-control">{{ old('long_description', $product->long_description) }}</textarea>
            </div>

            <div class="form-group">
                <label for="quick_description">Quick Description (Optional)</label>
                <textarea name="quick_description" id="quick_description" class="form-control">{{ old('quick_description', $product->quick_description) }}</textarea>
            </div>

            <div class="form-group">
                <label for="star_rating">Star Rating (1-5)</label>
                <input type="number" name="star_rating" id="star_rating" min="1" max="5" class="form-control" value="{{ old('star_rating', $product->star_rating) }}">
            </div>

            <div class="form-group">
                <label for="sale">Sale Amount (Optional)</label>
                <input type="number" name="sale" id="sale" step="0.01" class="form-control" value="{{ old('sale', $product->sale) }}">
            </div>

            <div class="form-group">
                <label for="cpu">CPU Type</label>
                <select name="cpu" id="cpu" class="form-control">
                    <option value="amd" {{ old('cpu', $product->cpu) == 'amd' ? 'selected' : '' }}>AMD</option>
                    <option value="intel" {{ old('cpu', $product->cpu) == 'intel' ? 'selected' : '' }}>Intel</option>
                    <option value="arm" {{ old('cpu', $product->cpu) == 'arm' ? 'selected' : '' }}>ARM</option>
                </select>
            </div>

            <div class="form-group">
                <label for="category_id">Category</label>
                <select name="category_id" id="category_id" class="form-control">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="buy_now_url">Buy Now URL</label>
                <input type="url" name="buy_now_url" id="buy_now_url" class="form-control" value="{{ old('sale', $product->buy_now_url) }}">
            </div>


            <div class="form-group">
                <label for="seller">Seller</label>
                <select name="seller" id="seller" class="form-control">
                    <option value="OverTimeHosting" {{ old('seller', $product->seller) == 'OverTimeHosting' ? 'selected' : '' }}>OverTimeHosting</option>
                    <option value="ShadowHosting" {{ old('seller', $product->seller) == 'ShadowHosting' ? 'selected' : '' }}>ShadowHosting</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update Product</button>
        </form>
    </div>
</x-app-layout>
