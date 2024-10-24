<x-app-layout>
    <h1>{{ __('Pages') }}</h1>
    <a href="{{ route('admin.pages.create') }}" class="btn btn-primary">{{ __('Create New Page') }}</a>

    <table>
        <thead>
        <tr>
            <th>{{ __('Title') }}</th>
            <th>{{ __('Actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pages as $page)
            <tr>
                <td>{{ $page->title }}</td>
                <td>
                    <a href="{{ route('admin.pages.edit', $page->id) }}">{{ __('Edit') }}</a>
                    <form action="{{ route('admin.pages.destroy', $page->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">{{ __('Delete') }}</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $pages->links() }}
</x-app-layout>
