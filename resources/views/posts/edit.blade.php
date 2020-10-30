@extends('layouts.main')

@section('content')
    <h1>เเก้ไขโพสต์</h1>

    <form action="{{ route('posts.update',['post'=> $post->id]) }}"  method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="title">Post Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                   name="title" value="{{old('title', $post->title)}}"
                   aria-describedby="titleHelp">
            <small id="emailHelp" class="form-text text-muted">
                Post Title is required
            </small>
        </div>
        <div class="form-group">
            <label for="content">Post Content</label>
            <textarea class="form-control @error('content') is-invalid @enderror" id="content"
                      name="content">{{ old('content', $post->content) }}</textarea>
            @error('content')
            <div class="alert alert-danger" {{ $message }} </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">เเก้ไข</button>
    </form>

    <hr>

    <h2>Danger Zone</h2>
    <form action="{{route('posts.destroy',['post'=>$post->id])}}" method="POST">
    @method('DELETE')
    @csrf
    <button type="submit" class="btn btn-danger">ลบโพสต์</button>
    </form>

@endsection
