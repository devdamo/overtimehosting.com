<!-- resources/views/documentation/general/show.blade.php -->
@extends('layouts.wrapper')

@section('content')
    <div class="container">
        <h1 class="text-4xl font-bold mb-4">{{ $article->title }}</h1>

        <p class="text-gray-600 mb-4">
            Published on
            @if ($article->date_made)
                {{ $article->date_made->format('F j, Y') }}
            @else
                (Date not available)
            @endif
            | Reading Time: {{ $article->how_long_to_read }} minutes
        </p>

        @if ($article->bg_image)
            <img src="{{ asset('storage/' . $article->bg_image) }}" alt="{{ $article->title }}" class="mb-6">
        @endif

        <div class="prose max-w-none">
            {!! \Illuminate\Support\Str::markdown($article->markdown_body) !!}
        </div>

        <p class="mt-8 text-sm text-gray-500">
            Article by {{ $article->author->name ?? 'Unknown' }}
        </p>

        <!-- Go back button -->
        <a href="{{ route('documentation.general.index') }}" class="text-blue-600 hover:underline mt-6 block">
            ← Back to General Articles
        </a>
    </div>
@endsection
