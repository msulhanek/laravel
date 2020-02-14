@extends('layout.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="breadcrumb">
            <h2><a href="/posts/{{$post->id}}">{{$post->title}}</h2>
            <div class="card-body">Written at {{$post->created_at}}}}</div>
            </div>
        @endforeach
        <br>
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection