@extends('layout')
@section('title', 'Edit ' . $post->title)
@section('content')
    <form method="POST" action="{{route('posts.update', ['post'=>$post->id])}}">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Content</label>
            <textarea class="form-control" id="body" rows="15" name="body">{{$post->body}}</textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Edit">
    </form>
@endsection
