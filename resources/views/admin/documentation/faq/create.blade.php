<x-app-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">Create FAQ</h1>

        <form action="{{ route('admin.faqs.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="question" class="block text-gray-700">Question:</label>
                <input type="text" name="question" id="question" class="w-full border border-gray-300 rounded p-2" required>
            </div>
            <div class="mb-4">
                <label for="answer" class="block text-gray-700">Answer:</label>
                <textarea name="answer" id="answer" rows="5" class="w-full border border-gray-300 rounded p-2" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create FAQ</button>
        </form>
    </div>
</x-app-layout>
