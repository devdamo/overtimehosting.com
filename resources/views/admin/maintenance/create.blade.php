<x-app-layout>
    <h1>Create New Maintenance</h1>

    <form action="{{ route('admin.maintenance.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="service_name">Service Name</label>
            <select name="service_name" id="service_name" class="form-control">
                @foreach($presetServices as $service)
                    <option value="{{ $service }}">{{ $service }}</option>
                @endforeach
                <option value="custom">Other (Please specify)</option>
            </select>
            <input type="text" name="custom_service_name" placeholder="Custom Service Name" class="form-control mt-2">
        </div>

        <div class="form-group">
            <label for="reason">Reason for Maintenance</label>
            <textarea name="reason" id="reason" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="priority">Priority</label>
            <select name="priority" id="priority" class="form-control" required>
                <option value="low">Low</option>
                <option value="medium">Medium</option>
                <option value="high">High</option>
            </select>
        </div>

        <div class="form-group">
            <label for="start_date">Start Date</label>
            <input type="datetime-local" name="start_date" id="start_date" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="end_date">End Date</label>
            <input type="datetime-local" name="end_date" id="end_date" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-app-layout>
