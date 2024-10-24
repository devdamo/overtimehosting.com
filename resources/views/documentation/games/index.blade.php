@extends('layouts.wrapper')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold mb-6">Games</h1>

        <ul class="space-y-6">
            @foreach($categories as $category)
                <li>
                    <a href="{{ route('documentation.games.category', $category->category) }}" class="block p-6 bg-gray-100 rounded-lg shadow hover:bg-gray-200">
                        <h2 class="text-2xl font-bold">{{ $category->category }}</h2>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
