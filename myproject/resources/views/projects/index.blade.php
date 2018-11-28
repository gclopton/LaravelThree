@extends('layout')

@section('head')
@endsection

@section('title', 'welcome')

@section('content')
    <h1>projects/index</h1>

    @foreach ($projects as $project)
        <li>{{$project}}</li>
        {{--<li>{{$project->title}}</li>--}}
        @endforeach

@endsection