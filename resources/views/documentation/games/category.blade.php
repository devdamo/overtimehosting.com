@extends('layouts.wrapper')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold mb-6">{{ $category }}</h1>

        <ul class="space-y-4">
            @foreach($articles as $article)
                <li>
                    <a href="{{ route('documentation.games.show', [$category, $article->slug]) }}" class="block p-4 bg-gray-100 rounded-lg shadow hover:bg-gray-200">
                        <h2 class="text-2xl font-bold">{{ $article->title }}</h2>
                        <p class="mt-2 text-gray-700">{{ $article->description }}</p>
                        <p class="mt-1 text-gray-500">Read time: {{ $article->how_long_to_read }} min</p>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
