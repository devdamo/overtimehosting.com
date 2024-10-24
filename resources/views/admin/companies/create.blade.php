<x-app-layout>
    <h1>{{ isset($company) ? 'Edit Company' : 'Add New Company' }}</h1>

    <form action="{{ isset($company) ? route('companies.update', $company->id) : route('companies.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($company))
            @method('PUT')
        @endif

        <div class="form-group">
            <label for="name">Company Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $company->name ?? '' }}">
        </div>

        <div class="form-group">
            <label class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white" for="description">Features (Optional)</label>
            <x-editor
                name="description"
                label="description"
                :value="old('description')"
            />
        </div>

        <div class="form-group">
            <label for="logo">Logo</label>
            <input type="file" name="logo" id="logo" class="form-control">
            @if(isset($company) && $company->logo)
                <img src="{{ asset('storage/' . $company->logo) }}" alt="{{ $company->name }}" width="100">
            @endif
        </div>

        <div class="form-group">
            <label for="services">Services (comma-separated)</label>
            <input type="text" name="services" id="services" class="form-control" value="{{ isset($company) ? implode(',', $company->services) : '' }}">
        </div>

        <div class="form-group">
            <label for="main_activities">Main Activities and Responsibilities (comma-separated)</label>
            <input type="text" name="main_activities" id="main_activities" class="form-control" value="{{ isset($company) ? implode(',', $company->main_activities) : '' }}">
        </div>

        <button type="submit" class="btn btn-success">Save</button>
    </form>

</x-app-layout>
