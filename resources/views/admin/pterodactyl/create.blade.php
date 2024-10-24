<x-app-layout>
    <div class="container">
        <h1>Create Server Request</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('admin.pterodactyl.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="egg_name">Egg Name:</label>
                <select name="egg_name" id="egg_name" class="form-control" required>
                    @foreach($eggs as $egg)
                        @if(isset($egg['attributes']['name']))
                            <option value="{{ $egg['attributes']['name'] }}">{{ $egg['attributes']['name'] }}</option>
                        @else
                            <option value="">Egg name is missing</option>
                        @endif
                    @endforeach
                </select>
            </div>


            <div class="form-group">
                <label for="egg_name">Egg Name:</label>
                <select name="egg_name" id="egg_name" class="form-control" required>
                    @foreach($eggs as $egg)
                        <option value="{{ $egg['name'] }}">{{ $egg['name'] }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="ram">RAM (in MB):</label>
                <input type="number" name="ram" id="ram" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="cpu">CPU (in %):</label>
                <input type="number" name="cpu" id="cpu" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="storage">Storage (in MB):</label>
                <input type="number" name="storage" id="storage" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="reason">Reason for creation:</label>
                <textarea name="reason" id="reason" class="form-control" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</x-app-layout>
