@extends('layouts.wrapper')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold mb-6">Search Results</h1>

        @if($results->isEmpty())
            <p>No articles found for your search query.</p>
        @else
            <ul class="space-y-4">
                @foreach($results as $result)
                    <li>
                        <a href="{{ $result->url }}" class="block p-4 bg-gray-100 rounded-lg shadow hover:bg-gray-200">
                            <h2 class="text-2xl font-bold">{{ $result->title }}</h2>
                            <p class="mt-2 text-gray-700">{{ $result->description }}</p>
                        </a>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection
