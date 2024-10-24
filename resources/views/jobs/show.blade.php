@extends('layouts.wrapper')

@section('content')

    @include('layouts.navigation')

<h1>{{ $job->title }}</h1>
<img src="{{ asset('storage/' . $job->image_path) }}" alt="{{ $job->title }}">
<p>{{ $job->full_description }}</p>
<p>Job Type: {{ $job->job_type }}</p>
<p>Pay: {{ $job->pay }}</p>
<p>Additional Pay: {{ $job->additional_pay }}</p>
<p>Benefits: {{ $job->benefits }}</p>
<p>Schedule: {{ $job->schedule }}</p>
<p>Work Location: {{ $job->work_location }}</p>
    <a href="{{ route('jobs.apply', $job->id) }}" class="btn btn-primary">Apply</a>

    <x-footer/>

@endsection
