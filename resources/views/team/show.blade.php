<!-- resources/views/team/show.blade.php -->
@extends('layouts.wrapper')

@section('content')
    <div class="container">
        <div class="text-center">
            <img src="{{ asset('storage/' . $teamMember->logo) }}" alt="{{ $teamMember->display_name }}" class="w-32 h-32 rounded-full mx-auto">
            <h1 class="text-3xl font-bold">{{ $teamMember->display_name }}</h1>
            <p class="text-gray-600">{{ $teamMember->company_role }}</p>
        </div>

        <div class="mt-8">
            <h2 class="text-xl font-bold">About Me</h2>
            <p>{{ $teamMember->about_me }}</p>
        </div>

        @if($teamMember->links)
            <div class="mt-8">
                <h2 class="text-xl font-bold">Links</h2>
                <ul>
                    @foreach($teamMember->links as $name => $url)
                        <li><a href="{{ $url }}" class="text-blue-600" target="_blank">{{ $name }}</a></li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@endsection
