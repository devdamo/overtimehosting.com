<x-app-layout>
    <div class="container">
        <h1 class="text-center my-5">Edit Maintenance</h1>

        <form action="{{ route('admin.maintenance.update', $maintenance->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="service_name">Service Name</label>
                <select name="service_name" id="service_name" class="form-control">
                    @foreach($presetServices as $service)
                        <option value="{{ $service }}" {{ $service == $maintenance->service_name ? 'selected' : '' }}>
                            {{ $service }}
                        </option>
                    @endforeach
                    <option value="custom" {{ $maintenance->service_name == 'custom' ? 'selected' : '' }}>Other (Specify)</option>
                </select>
            </div>

            <div class="form-group">
                <label for="reason">Reason for Maintenance</label>
                <textarea name="reason" id="reason" class="form-control">{{ $maintenance->reason }}</textarea>
            </div>

            <div class="form-group">
                <label for="priority">Priority</label>
                <select name="priority" id="priority" class="form-control">
                    <option value="low" {{ $maintenance->priority == 'low' ? 'selected' : '' }}>Low</option>
                    <option value="medium" {{ $maintenance->priority == 'medium' ? 'selected' : '' }}>Medium</option>
                    <option value="high" {{ $maintenance->priority == 'high' ? 'selected' : '' }}>High</option>
                </select>
            </div>

            <div class="form-group">
                <label for="start_date">Start Date</label>
                <input type="datetime-local" name="start_date" id="start_date" class="form-control" value="{{ \Carbon\Carbon::parse($maintenance->start_date)->format('Y-m-d\TH:i') }}">
            </div>

            <div class="form-group">
                <label for="end_date">End Date</label>
                <input type="datetime-local" name="end_date" id="end_date" class="form-control" value="{{ \Carbon\Carbon::parse($maintenance->end_date)->format('Y-m-d\TH:i') }}">
            </div>

            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>
</x-app-layout>
