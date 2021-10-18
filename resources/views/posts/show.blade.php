@extends('layout')
@section('title', 'Show ' . $post->title)
@section('content')
    <form method="POST" action="{{route('posts.update', ['post'=>$post->id])}}">
        @method('PUT')
        @csrf
    <table class="table table-striped">
        <thead>
        <th>Title</th>
        <th>Body</th>
        </thead>
        <tbody>
            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
            </tr>
        </tbody>
        <form method="POST" action="{{route('posts.destroy', ['post'=> $post->id])}}">
            @method('DELETE')
            @csrf
        <a style="margin: 2px" class="btn btn-primary" href="/admin/posts" class="card-link">Go back</a>
        <a style="margin: 2px" class="btn btn-warning" href="{{route('posts.edit', ['post'=>$post->id])}}">edit</a>
        <input style="margin: 2px" class="btn btn-danger" type="submit" value="delete">
    </form>
    </table>
@endsection
