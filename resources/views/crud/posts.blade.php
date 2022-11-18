@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="{{route('post.create')}}" class="btn btn-primary mb-3" role="button">Create new post</a>
        <table class="table table-striped">

            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Likes</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td><a href="{{route('post.show', $post->id)}}">{{ $post->title }}</a></td>
                <td>{{ Str::limit($post->content, 50) }}</td>
                <td>{{ $post->likes }}</td>
                <td>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{route('post.edit',$post->id)}}" class="btn btn-warning mb-3" role="button"><i class="bi bi-pen-fill"></i></a>
                        </div>
                        <div class="col-md-6">
                            <form method="post" action="{{route('post.destroy',$post->id)}}">
                                @csrf
                                @method('delete')
                                <button  type="submit" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                            </form>
                        </div>
                    </div>
                </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $posts->withQueryString()->links() }}
    </div>
@endsection

