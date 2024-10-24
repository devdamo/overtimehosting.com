@extends('layouts.wrapper')

@section('content')

    @include('layouts.navigation')
    <div class="container mx-auto mt-10">
        <h1 class="text-2xl font-bold mb-4">MOTD Preview</h1>
        <div class="bg-gray-100 p-4 rounded-md">
            <p class="font-mono">{{ $motd }}</p>
        </div>
        <div class="mt-4">
            <textarea class="w-full p-2 border rounded-md focus:outline-none" rows="5" readonly>{{ $motd }}</textarea>
            <p class="mt-2 text-sm text-gray-500">Copy the above MOTD and paste it into your Minecraft server configuration.</p>
            <a href="{{ route('motd.index') }}" class="mt-4 inline-block bg-blue-500 text-white p-2 rounded-md">Edit</a>
        </div>
    </div>
@endsection
