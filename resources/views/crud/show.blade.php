@extends('layouts.app')
@section('content')
    <div class="container">
        <p>Title: <slag>{{ $post->title }}</slag></p>
        <p>Content: <slag>{{ $post->content }}</slag></p>
    <div>
        <a href="{{route('post.index')}}">Back</a>
    </div>
    </div>

@endsection
