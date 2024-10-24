@extends('layouts.wrapper')

@section('content')

    @include('layouts.navigation')
    <div class="container mx-auto mt-10">
        <h1 class="text-2xl font-bold mb-4">MOTD Editor</h1>
        <form method="POST" action="{{ route('motd.store') }}">
            @csrf
            <div class="mb-4">
                <label for="motd" class="block text-gray-700">Message:</label>
                <textarea id="motd" name="motd" rows="5" class="w-full mt-1 p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
            </div>
            <div class="mb-4">
                <label for="segments" class="block text-gray-700">Styled Segments:</label>
                <div id="segments-container" class="space-y-2">
                    <div class="segment">
                        <input type="text" name="segments[0][text]" placeholder="Segment text" class="w-full mt-1 p-2 border rounded-md" />
                        <select name="segments[0][color]" class="w-full mt-1 p-2 border rounded-md">
                            <option value="">No Color</option>
                            <option value="§0">Black</option>
                            <option value="§1">Dark Blue</option>
                            <option value="§f">White</option>
                            <!-- Add other colors as needed -->
                        </select>
                        <div class="flex items-center space-x-4 mt-1">
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="segments[0][bold]" value="§l" class="form-checkbox">
                                <span class="ml-2">Bold</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="segments[0][italic]" value="§o" class="form-checkbox">
                                <span class="ml-2">Italic</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="segments[0][underline]" value="§n" class="form-checkbox">
                                <span class="ml-2">Underline</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="segments[0][strikethrough]" value="§m" class="form-checkbox">
                                <span class="ml-2">Strikethrough</span>
                            </label>
                        </div>
                    </div>
                </div>
                <button type="button" id="add-segment" class="mt-2 bg-gray-500 text-white p-2 rounded-md">Add Segment</button>
            </div>
            <button type="submit" class="bg-blue-500 text-white p-2 rounded-md">Preview</button>
        </form>
    </div>

    <script>
        document.getElementById('add-segment').addEventListener('click', function() {
            var container = document.getElementById('segments-container');
            var index = container.getElementsByClassName('segment').length;
            var newSegment = document.createElement('div');
            newSegment.classList.add('segment', 'space-y-2');
            newSegment.innerHTML = `
            <input type="text" name="segments[${index}][text]" placeholder="Segment text" class="w-full mt-1 p-2 border rounded-md" />
            <select name="segments[${index}][color]" class="w-full mt-1 p-2 border rounded-md">
                <option value="">No Color</option>
                <option value="§0">Black</option>
                <option value="§1">Dark Blue</option>
                <option value="§f">White</option>
                <!-- Add other colors as needed -->
            </select>
            <div class="flex items-center space-x-4 mt-1">
                <label class="inline-flex items-center">
                    <input type="checkbox" name="segments[${index}][bold]" value="§l" class="form-checkbox">
                    <span class="ml-2">Bold</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="checkbox" name="segments[${index}][italic]" value="§o" class="form-checkbox">
                    <span class="ml-2">Italic</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="checkbox" name="segments[${index}][underline]" value="§n" class="form-checkbox">
                    <span class="ml-2">Underline</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="checkbox" name="segments[${index}][strikethrough]" value="§m" class="form-checkbox">
                    <span class="ml-2">Strikethrough</span>
                </label>
            </div>
        `;
            container.appendChild(newSegment);
        });
    </script>
@endsection

