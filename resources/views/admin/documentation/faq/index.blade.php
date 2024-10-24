<x-app-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">FAQs</h1>

        <div class="text-right mb-4">
            <a href="{{ route('admin.faqs.create') }}" class="btn btn-primary">Add New FAQ</a>
        </div>

        @if ($faqs->isEmpty())
            <p>No FAQs available.</p>
        @else
            <table class="table-auto w-full">
                <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2">Question</th>
                    <th class="px-4 py-2">Answer</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($faqs as $faq)
                    <tr>
                        <td class="text-white border px-4 py-2">{{ $faq->question }}</td>
                        <td class="text-white border px-4 py-2">{{ Str::limit($faq->answer, 50) }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('admin.faqs.edit', $faq->id) }}" class="text-green-400 btn btn-sm btn-warning">Edit</a>

                            <form action="{{ route('admin.faqs.destroy', $faq->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this FAQ?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-400 btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
</x-app-layout>
