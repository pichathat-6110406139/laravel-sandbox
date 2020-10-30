@extends('layouts.main')

@section('content')
    <h1>Show Page</h1>

    <p>ID: {{ $id }}</p>
    <p>ID: {{ $name }}</p>

    @can('update', $post)
        <a href="{{route('posts.edit',['post'=> $post->id])}}"
           class='btn btn-info'>เเก้ไขโพสต์
        </a>
    @endcan

    <p>Created: {{ $post->created_at }} </p>
    <p>View: {{ $post->view_count }}</p>

    <p>View: {{ $post->content }}</p>
@endsection

