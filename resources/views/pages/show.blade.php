@extends('layouts.wrapper')
@section('title', '{{ $page->title }}')
@section('content')

    @include('layouts.navigation')
    <div class="page">
        <h1>{{ $page->title }}</h1>
        <div class="page-content">
            {!! $page->content !!}
        </div>
    </div>
@endsection
