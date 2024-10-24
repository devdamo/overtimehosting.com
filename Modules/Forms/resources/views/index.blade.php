@extends('forms::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('forms.name') !!}</p>
@endsection
