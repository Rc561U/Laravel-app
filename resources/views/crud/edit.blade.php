@extends('layouts.app')
@section('content')
    <div class="container">
        <h4>Edit</h4>
        <form action="{{ route('post.update', $post->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name='title' value="{{ $post->title }}" class="form-control" id="title" >

            </div>
            <div class="mb-3">
                <label for="content"  class="form-label">Content</label>
                <textarea  name='content' class="form-control" id="content">{{ $post->content }}</textarea>
            </div>
            <div class="mb-3">
                <label  class="form-label">Image</label>
                <input type="text" name='image' value="{{ $post->image }}" class="form-control" id="image" >
                <div id="emailHelp" class="form-text">We'll never share watch your image.</div>
            </div>
            <div class="form-group mb-3">
                <label for="category">Category</label>
                <select class="form-control" id="category" name="category_id">
                    @foreach($categories as $category)

                        <option
                            {{ $category->id === $post->category_id ? 'selected' : ''}}
                            value="{{ $category->id }}">{{ $category->title }}
                        </option>
                    @endforeach

                </select>
            </div>

            <div class="form-group mb-3">
                <label for="tags">Tags</label>
                <select multiple class="form-control" id="tags" name="tags[]">
                    @foreach($tags as $tag)
                        <option
                            @foreach($post->tags as $postTag)
                            {{ $tag->id === $postTag->id ? 'selected' : ''}}
                            @endforeach
                            value="{{ $tag->id }}">{{ $tag->title }}</option>
                    @endforeach

                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
