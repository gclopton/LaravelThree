@extends('layout')

@section('head')
@endsection

@section('title', 'welcome')

@section('content')
    <h1>My Website! {{$input}}</h1>

    @foreach ($tasks as $task)
        <ul>{{ $task }}</ul>
    @endforeach
    <p>The title of the page is: {!! $script !!}</p>
