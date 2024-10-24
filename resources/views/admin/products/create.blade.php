<x-app-layout>
    <section class="bg-white dark:bg-zinc-900 py-8">
        <div class="max-w-2xl px-4 py-8 mx-auto lg:py-16">
            <h1 class="mb-4 text-xl font-bold text-zinc-900 dark:text-white">Create New Product</h1>

            <!-- Display Validation Errors -->
            @if($errors->any())
                <div class="mb-4 p-4 bg-red-100 text-red-700 rounded-lg">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Product Create Form -->
            <form action="{{ route('dashboard.products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Product Name -->
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-zinc-900 dark:text-white mb-2">Product Name</label>
                    <input type="text" name="name" id="name" class="w-full p-2.5 border rounded-lg dark:bg-zinc-700 dark:border-zinc-600 dark:text-white" value="{{ old('name') }}">
                </div>

                <!-- Price -->
                <div class="mb-4">
                    <label for="price" class="block text-sm font-medium text-zinc-900 dark:text-white mb-2">Price</label>
                    <input type="number" name="price" id="price" step="0.01" class="w-full p-2.5 border rounded-lg dark:bg-zinc-700 dark:border-zinc-600 dark:text-white" value="{{ old('price') }}">
                </div>

                <!-- Product Logo -->
                <div class="mb-4">
                    <label for="logo" class="block text-sm font-medium text-zinc-900 dark:text-white mb-2">Product Logo</label>
                    <input type="file" name="logo" id="logo" class="w-full p-2.5 border rounded-lg dark:bg-zinc-700 dark:border-zinc-600 dark:text-white">
                </div>

                <!-- Background Logo -->
                <div class="mb-4">
                    <label for="bg_logo" class="block text-sm font-medium text-zinc-900 dark:text-white mb-2">Background Logo</label>
                    <input type="file" name="bg_logo" id="bg_logo" class="w-full p-2.5 border rounded-lg dark:bg-zinc-700 dark:border-zinc-600 dark:text-white">
                </div>

                <!-- Product Description -->
                <div class="mb-4">
                    <label for="product_description" class="block text-sm font-medium text-zinc-900 dark:text-white mb-2">Product Description</label>
                    <x-wysiwyg-editor name="product_description" label="Product Description" :value="old('product_description')" />
                </div>

                <!-- Features -->
                <div class="mb-4">
                    <label for="features" class="block text-sm font-medium text-zinc-900 dark:text-white mb-2">Features (Optional)</label>
                    <x-wysiwyg-editor name="features" label="Features" :value="old('features')" />
                </div>

                <!-- Important Info -->
                <div class="mb-4">
                    <label for="important_info" class="block text-sm font-medium text-zinc-900 dark:text-white mb-2">Important Info (Optional)</label>
                    <x-wysiwyg-editor name="important_info" label="Important Info" :value="old('important_info')" />
                </div>

                <!-- Long Description -->
                <div class="mb-4">
                    <label for="long_description" class="block text-sm font-medium text-zinc-900 dark:text-white mb-2">Long Description</label>
                    <x-wysiwyg-editor name="long_description" label="Long Description" :value="old('long_description')" />
                </div>

                <!-- Quick Description -->
                <div class="mb-4">
                    <label for="quick_description" class="block text-sm font-medium text-zinc-900 dark:text-white mb-2">Quick Description (Optional)</label>
                    <x-wysiwyg-editor name="quick_description" label="Quick Description" :value="old('quick_description')" />
                </div>

                <!-- Star Rating -->
                <div class="mb-4">
                    <label for="star_rating" class="block text-sm font-medium text-zinc-900 dark:text-white mb-2">Star Rating (1-5)</label>
                    <input type="number" name="star_rating" id="star_rating" min="1" max="5" class="w-full p-2.5 border rounded-lg dark:bg-zinc-700 dark:border-zinc-600 dark:text-white" value="{{ old('star_rating') }}">
                </div>

                <!-- Sale Amount -->
                <div class="mb-4">
                    <label for="sale" class="block text-sm font-medium text-zinc-900 dark:text-white mb-2">Sale Amount (Optional)</label>
                    <input type="number" name="sale" id="sale" step="0.01" class="w-full p-2.5 border rounded-lg dark:bg-zinc-700 dark:border-zinc-600 dark:text-white" value="{{ old('sale') }}">
                </div>

                <!-- CPU Type -->
                <div class="mb-4">
                    <label for="cpu" class="block text-sm font-medium text-zinc-900 dark:text-white mb-2">CPU Type</label>
                    <select name="cpu" id="cpu" class="w-full p-2.5 border rounded-lg dark:bg-zinc-700 dark:border-zinc-600 dark:text-white">
                        <option value="amd" {{ old('cpu') == 'amd' ? 'selected' : '' }}>AMD</option>
                        <option value="intel" {{ old('cpu') == 'intel' ? 'selected' : '' }}>Intel</option>
                        <option value="arm" {{ old('cpu') == 'arm' ? 'selected' : '' }}>ARM</option>
                    </select>
                </div>

                <!-- Category -->
                <div class="mb-4">
                    <label for="category_id" class="block text-sm font-medium text-zinc-900 dark:text-white mb-2">Category</label>
                    <select name="category_id" id="category_id" class="w-full p-2.5 border rounded-lg dark:bg-zinc-700 dark:border-zinc-600 dark:text-white">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Buy Now URL -->
                <div class="mb-4">
                    <label for="buy_now_url" class="block text-sm font-medium text-zinc-900 dark:text-white mb-2">Buy Now URL</label>
                    <input type="url" name="buy_now_url" id="buy_now_url" class="w-full p-2.5 border rounded-lg dark:bg-zinc-700 dark:border-zinc-600 dark:text-white" value="{{ old('buy_now_url') }}">
                </div>

                <!-- Seller -->
                <div class="mb-4">
                    <label for="seller" class="block text-sm font-medium text-zinc-900 dark:text-white mb-2">Seller</label>
                    <select name="seller" id="seller" class="w-full p-2.5 border rounded-lg dark:bg-zinc-700 dark:border-zinc-600 dark:text-white">
                        <option value="OverTimeHosting" {{ old('seller') == 'OverTimeHosting' ? 'selected' : '' }}>OverTimeHosting</option>
                        <option value="ShadowHosting" {{ old('seller') == 'ShadowHosting' ? 'selected' : '' }}>ShadowHosting</option>
                    </select>
                </div>

                <!-- Submit Button -->
                <div class="mt-6">
                    <button type="submit" class="w-full p-2.5 bg-blue-700 text-white font-medium rounded-lg hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700">
                        Create Product
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-app-layout>
