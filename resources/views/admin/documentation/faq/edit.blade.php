<x-app-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">Edit FAQ</h1>

        <form action="{{ route('admin.faqs.update', $faq->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="question" class="block text-sm font-medium text-gray-700">Question</label>
                <input type="text" name="question" id="question" class="mt-1 block w-full" value="{{ old('question', $faq->question) }}" required>
                @error('question')
                <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="answer" class="block text-sm font-medium text-gray-700">Answer</label>
                <textarea name="answer" id="answer" rows="5" class="mt-1 block w-full">{{ old('answer', $faq->answer) }}</textarea>
                @error('answer')
                <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary">Update FAQ</button>
        </form>
    </div>
</x-app-layout>
