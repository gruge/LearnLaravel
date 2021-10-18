@extends('layout')
@section('title', 'Posts')
@section('content')
    <div class="row">
        <div class="col">
            @if($posts->previousPageUrl())
                <a href="{{$posts->previousPageUrl()}}" class="btn btn-primary">Previous</a>
            @else
                <a href="{{$posts->previousPageUrl()}}" class="btn btn-primary disabled" role="button" aria-disabled="true">Previous</a>
            @endif
        </div>
        <div class="col text-end">
            @if($posts->nextPageUrl())
                <a href="{{$posts->nextPageUrl()}}" class="btn btn-primary">Next</a>
            @else
                <a href="{{$posts->nextPageUrl()}}" class="btn btn-primary disabled" role="button" aria-disabled="true">Next</a>
            @endif
        </div>
    </div>
    <div class="row row-cols-4">
        @foreach($posts as $post)
            <div class="col">
                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->snippet }}</p>
                        <a href="{{route('post', ['post' => $post->id])}}" class="card-link">Read more</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{$posts->links()}}
@endsection
