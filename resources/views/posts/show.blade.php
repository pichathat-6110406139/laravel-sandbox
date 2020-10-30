@extends('layouts.main')

@section('content')
    <h1>{{$post->title}}</h1>

    @if(Gate::allows('edit-post',$post))
<a href=" {{ route('posts.edit',['post' => $post->id]) }}"
   class="btn btn info">เเก้ไขโพสต์</a>
    @else
        {{Auth::user()->name}} ไม่มีสิทธิเเก้ไขโพสต์นี้
    @endif


    <p>Created: {{ $post->created_at }}</p>
    <p>View: {{ $post->view_count }}</p>

    <p>{{ $post->content }}</p>


@endsection
