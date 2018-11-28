@extends('layout')

@section('head')
@endsection

@section('title', 'welcome')

@section('content')
@endsection

<h1>Edit Project</h1>

<form method="POST" action="/projects/{{$project->id}}">
    {{method_field('PATCH')}}
    {{csrf_field()}}
    <label for="title">Title</label>
    <input type="text" name="title" placeholder="Title" value="{{$project->title}}">
    <label for="">Description</label>
    <textarea name="description">{{$project->description}}</textarea>
    <button type="submit">Update Project</button>
</form>
